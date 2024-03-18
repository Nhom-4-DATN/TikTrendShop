<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

// route location
Route::controller(AddressController::class)->group(function () {

    Route::domain('shop.' . env("APP_DOMAIN"))->group(function () {
        Route::get('/',  'index')->name('manager.locations');
    })->middleware('storeMiddleware');

    Route::prefix('address')->group(function () {
        Route::match(['get', 'post'], 'create', request()->isMethod('GET') ? 'formCU' : 'create')->name('address.create');
        Route::match(['get', 'put'], 'update', request()->isMethod('GET') ? 'formCU' : 'update')->name('address.update');
        Route::delete('delete/{id}', 'delete')->name('address.delete');
    });
})->middleware('auth');
