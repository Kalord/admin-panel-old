<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        var_dump('Hello, World!');
    }

    public function login()
    {
        return view('site/login');
    }

    public function registration()
    {
        return view('site/registration');
    }
}
