<?php

use App\Http\Controllers\V1\Admin\AdminBaseController as V1AdminBaseController;
use App\Http\Controllers\V1\Admin\AuthenticationController as V1AuthenticationController;
use App\Http\Controllers\V1\Admin\DashboardController as V1DashboardController;
use App\Http\Controllers\V1\Admin\BlogCategoriesController as V1BlogCategoriesController;
use App\Http\Controllers\V1\Admin\BlogController as V1BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Admin\WebSettingController as V1WebSettingController;
use App\Http\Controllers\V1\Admin\TestimonialController as V1TestimonialController;

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

    // Blog
    Route::get('blogs', [V1BlogController::class, 'index'])->name('list.blog');
    Route::get('blogs/data', [V1BlogController::class, 'getBlog'])->name('data-blogs');
    Route::get('blogs/create', [V1BlogController::class, 'create']);
    Route::post('blogs', [V1BlogController::class, 'store'])->name('create-blogs');
    Route::get('blogs/{id}/view', [V1BlogController::class, 'view']);
    Route::get('blogs/{id}/edit', [V1BlogController::class, 'edit']);
    Route::post('blogs/{id}', [V1BlogController::class, 'update'])->name('update-blogs');
    Route::post('blogs/highlight/{id}', [V1BlogController::class, 'set_highlight'])->name('highlight-blogs');
    Route::post('blogs/draft/{id}', [V1BlogController::class, 'status_draft']);
    Route::post('blogs/publish/{id}', [V1BlogController::class, 'status_publish']);
    Route::post('blogs/delete/{id}', [V1BlogController::class, 'delete']);
    Route::get('blogs/read/data/{blog_id}', [V1BlogController::class, 'getBlogRead'])->name('data-blog-read');
    Route::post('blogs/checkPublish', [V1BlogController::class, 'checkPublish']);

    // Blog Category
    Route::get('blog-category', [V1BlogCategoriesController::class, 'index']);
    Route::get('blog-category/data', [V1BlogCategoriesController::class, 'getBlogCategory'])->name('data-blog-category');
    Route::get('blog-category/create', [V1BlogCategoriesController::class, 'create']);
    Route::post('blog-category', [V1BlogCategoriesController::class, 'store'])->name('create-blog-category');
    Route::get('blog-category/{group}/edit', [V1BlogCategoriesController::class, 'edit']);
    Route::post('blog-category/{group}', [V1BlogCategoriesController::class, 'update'])->name('update-blog-category');
    Route::post('blog-category/delete/{group}', [V1BlogCategoriesController::class, 'delete']);

    // Testimonial
    Route::get('testimonial', [V1TestimonialController::class, 'index']);
    Route::get('testimonial/data', [V1TestimonialController::class, 'getTestimonial'])->name('data-testimonial');
    Route::get('testimonial/create', [V1TestimonialController::class, 'create']);
    Route::post('testimonial', [V1TestimonialController::class, 'store'])->name('create-testimonial');
    Route::get('testimonial/{group}/edit', [V1TestimonialController::class, 'edit']);
    Route::post('testimonial/{group}', [V1TestimonialController::class, 'update'])->name('update-testimonial');
    Route::post('testimonial/deactivate/{group}', [V1TestimonialController::class, 'deactivate']);
    Route::post('testimonial/activate/{group}', [V1TestimonialController::class, 'activate']);
    Route::post('testimonial/delete/{group}', [V1TestimonialController::class, 'delete']);

    // Website Settings
    Route::get('/settings', [V1WebSettingController::class, 'index']);
    Route::post('/settings/update', [V1WebSettingController::class, 'update'])->name('update-website-settings');
});
