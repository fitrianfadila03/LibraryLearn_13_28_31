<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//  Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/register', [HomeController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [HomeController::class, 'register']);
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/', function () {
    return view('home');
})->name('home');

