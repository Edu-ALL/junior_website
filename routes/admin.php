<?php

use App\Http\Controllers\V1\Admin\AdminBaseController as V1AdminBaseController;
use App\Http\Controllers\V1\Admin\AuthenticationController as V1AuthenticationController;
use App\Http\Controllers\V1\Admin\DashboardController as V1DashboardController;
use App\Http\Controllers\V1\Admin\BlogCategoriesController as V1BlogCategoriesController;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [V1AdminBaseController::class, 'index'])->name('admin.login');
Route::post('login', [V1AuthenticationController::class, 'auth']);
Route::get('logout', [V1AuthenticationController::class, 'logout'])->name('logout');

Route::middleware(['auth.expires', 'is_admin'])->group(function () {
    Route::get('dashboard', [V1DashboardController::class, 'index'])->name('admin.dashboard');

    // Blog Category
    Route::get('blog-category', [V1BlogCategoriesController::class, 'index']);
    Route::get('blog-category/data', [V1BlogCategoriesController::class, 'getBlogCategory'])->name('data-blog-category');
    Route::get('blog-category/create', [V1BlogCategoriesController::class, 'create']);
    Route::post('blog-category', [V1BlogCategoriesController::class, 'store'])->name('create-blog-category');
    Route::get('blog-category/{group}/edit', [V1BlogCategoriesController::class, 'edit']);
    Route::post('blog-category/{group}', [V1BlogCategoriesController::class, 'update'])->name('update-blog-category');
    Route::post('blog-category/delete/{group}', [V1BlogCategoriesController::class, 'delete']);
});
