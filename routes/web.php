<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\WebController as V1WebController;

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
        Route::get('/', [V1WebController::class, 'home'])->name('home');
        Route::get('/about-us', [V1WebController::class, 'about_us'])->name('about-us');
        Route::get('/programs', [V1WebController::class, 'programs'])->name('programs');
        Route::get('/contact-us', [V1WebController::class, 'contact_us'])->name('contact-us');
        Route::get('/programs/science', [V1WebController::class, 'science'])->name('programs.science');
        Route::get('/programs/creative-communication', [V1WebController::class, 'creative_communication'])->name('programs.creative-communication');
        Route::get('/programs/entrepreneurship', [V1WebController::class, 'entrepreneurship'])->name('programs.entrepreneurship');
        Route::get('/programs/coding-robotics', [V1WebController::class, 'coding_robotics'])->name('programs.coding-robotics');
        Route::get('/programs/visual-arts', [V1WebController::class, 'visual_arts'])->name('programs.visual-arts');
        Route::get('/blog', [V1WebController::class, 'blog'])->name('blogs');
        Route::get('/blog/{slug}', [V1WebController::class, 'detail_blog'])->name('blog.detail');
    }
);
