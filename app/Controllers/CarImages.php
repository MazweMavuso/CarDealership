<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;

class CarImages extends BaseController
{
    use ResponseTrait;

    // Upload an image for a car
    public function upload($carId)
    {
        // Ensure it's a POST request with multipart/form-data
        $file = $this->request->getFile('image');

        if (!$file || !$file->isValid()) {
            return $this->respond([
                'status' => 'error',
                'message' => 'No valid image uploaded.'
            ], ResponseInterface::HTTP_BAD_REQUEST);
        }

        // Save image to folder
        $newName = $file->getRandomName();
        $file->move(WRITEPATH . 'uploads', $newName);

        // TODO: Save image path and car_id to DB
        // $imageId = $this->carImageModel->saveImage($carId, $newName);

        return $this->respondCreated([
            'status' => 'success',
            'message' => 'Image uploaded successfully.',
            'data' => [
                'car_id' => $carId,
                'filename' => $newName,
                // 'image_id' => $imageId
            ]
        ]);
    }

    // Get all images for a car
    public function getImages($carId)
    {
        // TODO: Load from DB
        // $images = $this->carImageModel->getImagesByCarId($carId);
        $file = $this->request->getFile('image');
        if (!$file || !$file->isValid()) {
            return $this->respond([
                'status' => 'error',
                'message' => 'No valid images found.'
            ], ResponseInterface::HTTP_BAD_REQUEST);
        }
        $images = []; // Placeholder

        return $this->respond([
            'status' => 'success',
            'data' => $images
        ], ResponseInterface::HTTP_OK);
    }

    // Get single image info
    public function show($imageId)
    {
        // TODO: Load from DB
        // $image = $this->carImageModel->find($imageId);
        $image = null; // Placeholder

        if (!$image) {
            return $this->respond([
                'status' => 'error',
                'message' => 'Image not found.'
            ], ResponseInterface::HTTP_NOT_FOUND);
        }

        return $this->respond([
            'status' => 'success',
            'data' => $image
        ], ResponseInterface::HTTP_OK);
    }

    // Delete an image
    public function delete($imageId)
    {
        // TODO: Perform DB delete and remove file from disk
        // $deleted = $this->carImageModel->deleteImage($imageId);
        $deleted = true; // Placeholder

        if (!$deleted) {
            return $this->respond([
                'status' => 'error',
                'message' => 'Failed to delete image.'
            ], ResponseInterface::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $this->respondDeleted([
            'status' => 'success',
            'message' => 'Image deleted successfully.',
            'image_id' => $imageId
        ]);
    }
}
