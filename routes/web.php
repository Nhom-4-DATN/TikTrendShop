<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryBlogController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ManagerStores\StoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::prefix('address')->controller(AddressController::class)->group(function () {
    Route::get('create', 'formCU')->name('address.create');
    Route::post('create', 'create')->name('address.create');

    Route::get('update/{id}', 'formCU')->name('address.update');
    Route::put('update/{id}', 'update')->name('address.update');

    Route::delete('delete/{id}', 'delete')->name('address.delete');
});

Route::domain('shop.' . env("APP_DOMAIN"))->group(function () {
    Route::controller(StoresController::class)->group(function () {
        Route::get('/', 'index')->name('manager.shop');
        Route::prefix('shop')->group(function () {
            Route::get('{slug}', 'detail')->name('manager.shop-detail');
            Route::put('update/{slug}', 'update')->name('manager.update.shop');
            Route::get('register', 'formCU')->name('register.shop');
            Route::post('register', 'register')->name('register.shop');
        });
    });

    Route::get('location', [AddressController::class, 'index'])->name('manager.locations');
    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('manager.blog');
        Route::get('/create', [BlogController::class, 'form'])->name('manager.create');
        Route::post('/create', [BlogController::class, 'create'])->name('manager.create');
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryBlogController::class, 'index'])->name('manager.blog.category');
            Route::get('/create', [CategoryBlogController::class, 'form'])->name('manager.blog.category.create');
            Route::post('/create', [CategoryBlogController::class, 'create'])->name('manager.blog.category.create');
            Route::get('/update/{slug}_{id}', [CategoryBlogController::class, 'form'])->name('manager.blog.category.update');
            Route::put('/update/{slug}_{id}', [CategoryBlogController::class, 'edit'])->name('manager.blog.category.update');
            Route::delete('/delete/{id}', [CategoryBlogController::class, 'delete'])->name('manager.blog.category.delete');
        });
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::controller(ComponentController::class)->group(function () {
    Route::get('render-provinces', 'renderProvinces')->name('components.render-provinces');
    Route::get('render-list-location', 'renderListLocation')->name('components.render-list-location');
    Route::get('render-form-location', 'renderFormLocation')->name('components.render-form-location');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
