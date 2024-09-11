<?php

use App\Models\BlogCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\ApiController as V1ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category/{lang}', function ($lang) {
    return BlogCategories::where('lang', $lang)->get();
})->name('select-category');

Route::GET('/reference/blog/{lang}/{category}', [V1ApiController::class, 'getReferenceBlog']);