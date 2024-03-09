<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/product-details/{id_product}-{name_product}', [ProductsController::class, 'productDetails'])->name('productDetails');
Route::get('/search', [ProductsController::class, 'search'])->name('search');