<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ChangePasswordController;
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
Route::auth();

Route::middleware(['auth'])->group(function () {
    Route::get('/default-setting', function () {
        return view('site/components/user/default');
    })->name('default');
    Route::get('/account-information',[UserController::class, 'account'])->name('account');
    // up load file
    // update account-information
    Route::post('/update-profile', [InformationController::class, 'updateProfile'])->name('update-profile');
    //password
    Route::get('/password', [ChangePasswordController::class, 'password'])->name('password');
    Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');
});
