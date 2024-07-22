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
    return redirect()->to('/'.app()->getLocale());
});

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

        Route::get('/contact-us', function () {
            return view('page.contact-us');
        })->name('contact-us');

        Route::get('/programs/science', function () {
          return view('page.science');
        })->name('programs.science');

        Route::get('/programs/creative-communication', function () {
            return view('page.creative-communication');
        })->name('programs.creative-communication');

        Route::get('/programs/entrepreneurship', function () {
            return view('page.entrepreneurship');
        })->name('programs.entrepreneurship');

        Route::get('/programs/coding-robotics', function () {
            return view('page.coding-robotics');
        })->name('programs.coding-robotics');

        Route::get('/programs/visual-arts', function () {
            return view('page.visual-arts');
        })->name('programs.visual-arts');

        Route::get('/blog', function () {
            return view('page.blog');
        })->name('programs.blog');
    }
);
