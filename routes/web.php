<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home'); 
});

Route::get('/index', function () {
    return view('index'); 
})->name('index');

Route::get('/login', function () {
    return view('login'); 
})->name('login');

Route::get('/wealth', function () {
    return view('wealth'); 
})->name('wealth');

Route::get('/howtores', function () {
    return view('howtores'); 
})->name('howtores');

Route::get('/soyouwant', function () {
    return view('soyouwant'); 
})->name('soyouwant');

Route::get('/harrypotter', function () {
    return view('harrypotter'); 
})->name('harrypotter');

Route::get('/atomic', function () {
    return view('atomic'); 
})->name('atomic');

Route::get('/themillionaire', function () {
    return view('themillionaire'); 
})->name('themillionaire');

Route::get('/thepsychology', function () {
    return view('thepsychology'); 
})->name('thepsychology');

Route::get('/yourmoney', function () {
    return view('yourmoney'); 
})->name('yourmoney');

Route::get('/jktsblmpago', function () {
    return view('jktsblmpago'); 
})->name('jktsblmpago');

Route::get('/malioboro', function () {
    return view('malioboro'); 
})->name('malioboro');

Route::get('/pulang', function () {
    return view('pulang'); 
})->name('pulang');

Route::get('/hujan', function () {
    return view('hujan');
})->name('hujan');

Route::get('/matahari', function () {
    return view('matahari'); 
})->name('matahari');

Route::get('/dilan991', function () {
    return view('dilan991'); 
})->name('dilan991');

Route::get('/dilan990', function () {
    return view('dilan990'); 
})->name('dilan990');

Route::get('/milea', function () {
    return view('milea'); 
})->name('milea');
