<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
// route /order 
Route::controller(OrderController::class)->name('order.')->group(function () {
    Route::domain('shop.' . env("APP_DOMAIN"))->middleware("storeMiddleware")->name('manager.')->group(function () {
        Route::get('/', 'manager')->name('index');
        Route::get('/chart', 'chart')->name('chart');
    });
})->middleware('auth');
