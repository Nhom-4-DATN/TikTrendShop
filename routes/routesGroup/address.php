<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::controller(AddressController::class)->group(function () {
    Route::domain('shop.' . env("APP_DOMAIN"))->group(function () {
        Route::get('/',  'index')->name('manager.locations');
    });
});
