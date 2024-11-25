<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('index');
    }
    
    public function login()
    {
        return view('login'); 
    }
}

