<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function landingPage()
    {
        return view('pages/landing-page');
    }

    public function inventory()
    {
        return view('pages/inventory');
    }

    public function service()
    {
        return view('pages/services');
    }

    public function about()
    {
        return view('pages/aboutus');
    }
}
