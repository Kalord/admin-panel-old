<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

class SiteController extends Controller
{
    public function index()
    {
        return view('panel/home', [
            'modules' => Module::all()
        ]);
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
