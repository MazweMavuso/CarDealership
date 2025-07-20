<?php

namespace App\Controllers;

class AdminPanel extends BaseController
{
    public function index(): string
    {
        return view('AdminPanel/index');
    }

    public function dashboard()
    {
        return view('AdminPanel/dashboard');
    }

    public function manageUsers()
    {
        return view('AdminPanel/manage_users');
    }

    public function settings()
    {
        return view('AdminPanel/settings');
    }
}