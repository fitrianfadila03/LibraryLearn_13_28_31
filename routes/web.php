<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

 Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('index', [HomeController::class, 'index'])->name('index');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('login', [HomeController::class, 'login'])-> name('login');

Route::get('register', [HomeController::class, 'register'])-> name('register');

