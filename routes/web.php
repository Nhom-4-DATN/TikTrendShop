<?php

use App\Http\Controllers\AddressController;
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
        Route::get('/store/{slug}', 'detail')->name('manager.shop-detail');
        Route::put('shop/update/{slug}', 'update')->name('manager.update.shop');
        Route::get('shop/register', 'formCU')->name('register.shop');
        Route::post('shop/register', 'register')->name('register.shop');
    });
    Route::get('location', [AddressController::class, 'index'])->name('manager.locations');
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
