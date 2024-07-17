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

Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z-]{2,5}'],

    ],
    function () {
        Route::get('/', function () {
            return view('page.home');
        })->name('home');

        Route::get('/about-us', function () {
            return view('page.about-us');
        })->name('about-us');

        Route::get('/programs', function () {
            return view('page.programs');
        })->name('programs');
    }
);
