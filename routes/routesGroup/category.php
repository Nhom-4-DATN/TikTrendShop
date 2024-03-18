<?php

use App\Http\Controllers\CategoryBlogController;
use Illuminate\Support\Facades\Route;

//  route : /address
Route::controller(CategoryBlogController::class)->group(function () {
    Route::domain('shop.' . env("APP_DOMAIN"))->name('manager.category-blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::match(['get', 'post'], 'create', request()->isMethod('get') ? 'form' : 'create')->name('create');
        Route::match(['get', 'put'], 'update/{slug}_{id}', request()->isMethod('get') ? 'form' : 'edit')->name('update');
        Route::delete('delete/{id}', 'delete')->name('delete');
    })->middleware(['storeMiddleware']);
})->middleware('auth');
