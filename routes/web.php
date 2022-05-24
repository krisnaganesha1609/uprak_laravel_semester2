<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/logout', 'logout')->name('logoutAdmin');
});

Route::resource('/shop', \App\Http\Controllers\ProductsController::class);

Route::get('/cart', [CartsController::class, 'cart'])->middleware('auth');
Route::get('add-to-cart/{id}', [CartsController::class, 'addToCart']);
Route::patch('update-cart', [CartsController::class, 'update']);
Route::delete('remove-from-cart', [CartsController::class, 'remove']);