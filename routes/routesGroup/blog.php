<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::controller(BlogController::class)->group(function () {
    Route::domain('shop.' . env("APP_DOMAIN"))->name('manager.blog.')->group(function () {
        Route::get('/', 'manageBlog')->name('index');
        Route::get('filter', 'filter')->name('filter');
        Route::get('trash', 'trash')->name('trash');
        Route::post('restore', 'restore')->name('restore');
        Route::delete('delete', 'delete')->name('delete');
        Route::delete('destroy', 'destroy')->name('destroy');
        Route::match(['get', 'post'], 'create', request()->isMethod('get') ? 'form' : 'create')->name('create');
        Route::match(['get', 'put'], 'update/{id}', request()->isMethod('get') ? 'form' : 'edit')->name('update');
    });
});
