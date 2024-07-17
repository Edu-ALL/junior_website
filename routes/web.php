<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/about-us', function () {
    return view('page.about-us');
})->name('about-us');

Route::get('/programs', function () {
    return view('page.programs');
})->name('programs');

Route::get('/programs/science', function () {
    return view('page.science');
});

Route::get('/programs/creative-communication', function () {
    return view('page.creative-communication');
});

Route::get('/programs/entrepreneurship', function () {
    return view('page.entrepreneurship');
});

Route::get('/programs/coding-robotics', function () {
    return view('page.coding-robotics');
});
