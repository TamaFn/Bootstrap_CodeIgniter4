<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('backend/Login/login');
    }

    public function dashboard(): string
    {
        return view('backend/Login/dashboard');
    }
}
