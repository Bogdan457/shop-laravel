<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/{cat}', [App\Http\Controllers\ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/category/{cat}/{product_id}', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cartIndex');

Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');
