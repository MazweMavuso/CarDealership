<?php

namespace App\Controllers;

use App\Models\CarModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Cars extends ResourceController
{
    protected $modelName = 'App\Models\CarModel';
    protected $format    = 'json';

    /**
     * Get all cars with optional filtering and pagination
     * GET /cars
     */
    public function index()
    {
        try {
            $model = new CarModel();
            
            // Get query parameters for filtering and pagination
            $limit = $this->request->getGet('limit') ?? 10;
            $offset = $this->request->getGet('offset') ?? 0;
            $make = $this->request->getGet('make');
            $model_name = $this->request->getGet('model');
            $year = $this->request->getGet('year');
            $min_price = $this->request->getGet('min_price');
            $max_price = $this->request->getGet('max_price');

            // Build query with filters
            $query = $model;
            
            if ($make) {
                $query = $query->where('make', $make);
            }
            
            if ($model_name) {
                $query = $query->where('model', $model_name);
            }
            
            if ($year) {
                $query = $query->where('year', $year);
            }
            
            if ($min_price) {
                $query = $query->where('price >=', $min_price);
            }
            
            if ($max_price) {
                $query = $query->where('price <=', $max_price);
            }

            $cars = $query->findAll($limit, $offset);
            $total = $query->countAllResults();

            return $this->respond([
                'status' => 'success',
                'message' => 'Cars retrieved successfully',
                'data' => $cars,
                'total' => $total,
                'limit' => $limit,
                'offset' => $offset
            ]);

        } catch (\Exception $e) {
            return $this->failServerError('Error retrieving cars: ' . $e->getMessage());
        }
    }

    /**
     * Get a single car by ID
     * GET /cars/{id}
     */
    public function show($id = null)
    {
        try {
            $model = new CarModel();
            $car = $model->find($id);

            if (!$car) {
                return $this->failNotFound('Car not found with ID: ' . $id);
            }

            return $this->respond([
                'status' => 'success',
                'message' => 'Car retrieved successfully',
                'data' => $car
            ]);

        } catch (\Exception $e) {
            return $this->failServerError('Error retrieving car: ' . $e->getMessage());
        }
    }

    /**
     * Create a new car
     * POST /cars
     */
    public function create()
    {
        try {
            $model = new CarModel();
            
            // Get JSON data from request
            $json = $this->request->getJSON(true);
            
            if (!$json) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid JSON data provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            // Validate required fields
            $requiredFields = ['make', 'model', 'year', 'price'];
            $missingFields = [];
            
            foreach ($requiredFields as $field) {
                if (!isset($json[$field]) || empty($json[$field])) {
                    $missingFields[] = $field;
                }
            }
            
            if (!empty($missingFields)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Missing required fields: ' . implode(', ', $missingFields)
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            // Additional validation
            if (isset($json['year']) && (!is_numeric($json['year']) || $json['year'] < 1900 || $json['year'] > date('Y') + 1)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid year provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            if (isset($json['price']) && (!is_numeric($json['price']) || $json['price'] < 0)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid price provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            if (isset($json['mileage']) && (!is_numeric($json['mileage']) || $json['mileage'] < 0)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid mileage provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            // Filter only allowed fields
            $allowedFields = $model->getAllowedFields();
            $filteredData = array_intersect_key($json, array_flip($allowedFields));

            $carId = $model->insert($filteredData);

            if (!$carId) {
                return $this->failServerError('Failed to create car');
            }

            $newCar = $model->find($carId);

            return $this->respondCreated([
                'status' => 'success',
                'message' => 'Car created successfully',
                'data' => $newCar
            ]);

        } catch (\Exception $e) {
            return $this->failServerError('Error creating car: ' . $e->getMessage());
        }
    }

    /**
     * Update an existing car
     * PUT /cars/{id}
     */
    public function update($id = null)
    {
        try {
            $model = new CarModel();
            
            // Check if car exists
            $existingCar = $model->find($id);
            if (!$existingCar) {
                return $this->failNotFound('Car not found with ID: ' . $id);
            }

            // Get JSON data from request
            $json = $this->request->getJSON(true);
            
            if (!$json) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid JSON data provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            // Additional validation for updated fields
            if (isset($json['year']) && (!is_numeric($json['year']) || $json['year'] < 1900 || $json['year'] > date('Y') + 1)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid year provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            if (isset($json['price']) && (!is_numeric($json['price']) || $json['price'] < 0)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid price provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            if (isset($json['mileage']) && (!is_numeric($json['mileage']) || $json['mileage'] < 0)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid mileage provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            // Filter only allowed fields
            $allowedFields = $model->getAllowedFields();
            $filteredData = array_intersect_key($json, array_flip($allowedFields));

            if (empty($filteredData)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'No valid fields provided for update'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            $result = $model->update($id, $filteredData);

            if (!$result) {
                return $this->failServerError('Failed to update car');
            }

            $updatedCar = $model->find($id);

            return $this->respond([
                'status' => 'success',
                'message' => 'Car updated successfully',
                'data' => $updatedCar
            ]);

        } catch (\Exception $e) {
            return $this->failServerError('Error updating car: ' . $e->getMessage());
        }
    }

    /**
     * Partially update an existing car
     * PATCH /cars/{id}
     */
    public function patch($id = null)
    {
        // Use the same logic as update for partial updates
        return $this->update($id);
    }

    /**
     * Delete a car
     * DELETE /cars/{id}
     */
    public function delete($id = null)
    {
        try {
            $model = new CarModel();
            
            // Check if car exists
            $car = $model->find($id);
            if (!$car) {
                return $this->failNotFound('Car not found with ID: ' . $id);
            }

            $result = $model->delete($id);

            if (!$result) {
                return $this->failServerError('Failed to delete car');
            }

            return $this->respondDeleted([
                'status' => 'success',
                'message' => 'Car deleted successfully',
                'data' => ['id' => $id]
            ]);

        } catch (\Exception $e) {
            return $this->failServerError('Error deleting car: ' . $e->getMessage());
        }
    }

    /**
     * Get cars by make
     * GET /cars/make/{make}
     */
    public function getByMake($make = null)
    {
        try {
            if (!$make) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Make parameter is required'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            $model = new CarModel();
            $cars = $model->where('make', $make)->findAll();

            return $this->respond([
                'status' => 'success',
                'message' => 'Cars retrieved successfully',
                'data' => $cars,
                'count' => count($cars)
            ]);

        } catch (\Exception $e) {
            return $this->failServerError('Error retrieving cars by make: ' . $e->getMessage());
        }
    }

    /**
     * Search cars by multiple criteria
     * POST /cars/search
     */
    public function search()
    {
        try {
            $model = new CarModel();
            $json = $this->request->getJSON(true);

            if (!$json) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'Invalid JSON search criteria provided'
                ], ResponseInterface::HTTP_BAD_REQUEST);
            }

            $query = $model;

            // Apply search filters
            foreach ($json as $field => $value) {
                if (in_array($field, $model->getAllowedFields()) && !empty($value)) {
                    if (in_array($field, ['make', 'model', 'fuel_type', 'transmission', 'color', 'car_condition'])) {
                        $query = $query->like($field, $value);
                    } elseif (in_array($field, ['year', 'price', 'mileage'])) {
                        if (is_array($value)) {
                            if (isset($value['min'])) {
                                $query = $query->where($field . ' >=', $value['min']);
                            }
                            if (isset($value['max'])) {
                                $query = $query->where($field . ' <=', $value['max']);
                            }
                        } else {
                            $query = $query->where($field, $value);
                        }
                    } else {
                        $query = $query->where($field, $value);
                    }
                }
            }

            $cars = $query->findAll();

            return $this->respond([
                'status' => 'success',
                'message' => 'Search completed successfully',
                'data' => $cars,
                'count' => count($cars)
            ]);

        } catch (\Exception $e) {
            return $this->failServerError('Error searching cars: ' . $e->getMessage());
        }
    }
}