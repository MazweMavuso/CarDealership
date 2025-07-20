<?php

namespace App\Controllers;
use App\Models\AdminUSerModel;

Class AdminUser extends BaseController
{
public function register()
{
    if (!$this->request->isAJAX()) {
        return $this->response->setStatusCode(403)->setJSON([
            'status' => 'error',
            'message' => 'Forbidden'
        ]);
    }

    $data = $this->request->getJSON();
    $validation = \Config\Services::validation();

    $validation->setRules([
        'firstName' => 'required',
        'lastName'  => 'required',
        'email'     => 'required|valid_email|is_unique[admins.email]',
        'password'  => 'required|min_length[8]',
    ], [
        'email' => [
            'is_unique' => 'Email is already registered.'
        ],
        'password' => [
            'min_length' => 'Password must be at least 8 characters long.'
        ]
    ]);

    if (!$validation->run((array)$data)) {
        $errors = $validation->getErrors();
        return $this->response->setJSON([
            'status' => 'error',
            'message' => implode(', ', $errors),
            'errors' => $errors
        ]);
    }

    try {
        $userModel = new \App\Models\AdminUserModel();

        $userData = [
            'firstName' => $data->firstName,
            'lastName'  => $data->lastName,
            'email'     => $data->email,
            'password'  => password_hash($data->password, PASSWORD_DEFAULT),
        ];

        if ($userModel->insert($userData)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'You can now sign in with your credentials'
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Database insert failed',
            'errors' => $userModel->errors()
        ]);
    } catch (\Throwable $e) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Exception: ' . $e->getMessage()
        ]);
    }
}

    public function login()
{
    if (!$this->request->isAJAX()) {
        return $this->response->setStatusCode(403)->setJSON([
            'status' => 'error',
            'message' => 'Forbidden access.'
        ]);
    }

    $data = $this->request->getJSON();

    $validation = \Config\Services::validation();
    $validation->setRules([
        'email' => 'required|valid_email',
        'password' => 'required'
    ]);

    if (!$validation->run((array)$data)) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => "Invalid email or password",
            'errors' => $validation->getErrors()
        ]);
    }

    $userModel = new AdminUSerModel();

    $user = $userModel->where('email', $data->email)->first();

    if (!$user) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Invalid email or password'
        ]);
    }

    if (!password_verify($data->password, $user['password'])) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Invalid email or password'
        ]) ;
    }

    // Store user in session
    $session = session();
    $session->set([
        'user_id'    => $user['id'],
        'first_name' => $user['firstName'],
        'last_name'  => $user['lastName'],
        'email'      => $user['email'],
        'isLoggedIn' => true
    ]);

return $this->response->setJSON([
    'status' => 'success',
    'message' => 'Login successful',
    'redirect' => '/admin/dashboard' // JavaScript will redirect
]);
}


    
}