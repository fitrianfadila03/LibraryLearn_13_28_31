<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

 Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('login', [HomeController::class, 'login'])-> name('login');

Route::get('/wealth', [HomeController::class, 'wealthOfNations'])->name('wealth');
Route::get('/howtores', [HomeController::class, 'howToRespectMyself'])->name('howtores');
Route::get('/soyouwant', [HomeController::class, 'soYouWantToBeALibrarian'])->name('soyouwant');
Route::get('/harrypotter', [HomeController::class, 'harryPotter'])->name('harrypotter');
Route::get('/atomic', [HomeController::class, 'atomicHabits'])->name('atomic');
Route::get('/themillionaire', [HomeController::class, 'theMillionaireNextDoor'])->name('themillionaire');
Route::get('/thepsychology', [HomeController::class, 'thePsychologyOfMoney'])->name('thepsychology');
Route::get('/yourmoney', [HomeController::class, 'yourMoneyOrYourLife'])->name('yourmoney');

Route::get('/jktsblmpago', [HomeController::class, 'jakartaSebelumPagi'])->name('jktsblmpago');
Route::get('/malioboro', [HomeController::class, 'malioboroAtMidnight'])->name('malioboro');
Route::get('/pulang', [HomeController::class, 'pulang'])->name('pulang');
Route::get('/hujan', [HomeController::class, 'hujan'])->name('hujan');
Route::get('/matahari', [HomeController::class, 'matahari'])->name('matahari');
Route::get('/dilan991', [HomeController::class, 'dilan1991'])->name('dilan991');
Route::get('/dilan990', [HomeController::class, 'dilan1990'])->name('dilan990');
Route::get('/milea', [HomeController::class, 'milea'])->name('milea');