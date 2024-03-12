<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::controller(BlogController::class)->group(function () {
    Route::domain('shop.' . env("APP_DOMAIN"))->name('manager.blog.')->group(function () {
        Route::get('/', 'manageBlog')->name('index');
        Route::match(['get', 'post'], 'create', request()->isMethod('get') ? 'form' : 'create')->name('create');
    });
});
