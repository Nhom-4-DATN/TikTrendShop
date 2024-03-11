<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryBlogController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ManagerStores\StoresController;


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

Route::domain('shop.' . env("APP_DOMAIN"))->group(function () {
    Route::controller(StoresController::class)->group(function () {
        // trang chủ cửa hàng
        Route::get('/', 'index')->name('manager.shop');
        Route::prefix('shop')->group(function () {
            //  đăng ký cửa hàng
            Route::match(['get', 'post'], 'register', request()->method('get') ? 'formCU' : 'register')->name('register.shop');
            // cập nhập cửa hàng
            Route::get('{slug}', 'detail')->name('manager.shop-detail');
            Route::put('update/{slug}', 'update')->name('manager.update.shop');
        });
    });
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::auth();

Route::middleware(['auth'])->group(function () {
    Route::get('/default-setting', function () {
        return view('site/components/user/default');
    })->name('default');
    Route::get('/account-information', [UserController::class, 'account'])->name('account');
    // up load file
    // update account-information
    Route::post('/update-profile', [InformationController::class, 'updateProfile'])->name('update-profile');
    //password
    Route::get('/password', [ChangePasswordController::class, 'password'])->name('password');
    Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');
    // products
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/product-details/{id_product}-{name_product}', [ProductsController::class, 'productDetails'])->name('productDetails');
    Route::get('/search', [ProductsController::class, 'search'])->name('search');
});
Route::prefix('address')->controller(AddressController::class)->group(function () {
    Route::get('create', 'formCU')->name('address.create');
    Route::post('create', 'create')->name('address.create');

    Route::get('update/{id}', 'formCU')->name('address.update');
    Route::put('update/{id}', 'update')->name('address.update');

    Route::delete('delete/{id}', 'delete')->name('address.delete');
});



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::controller(ComponentController::class)->group(function () {
    Route::get('render-provinces', 'renderProvinces')->name('components.render-provinces');
    Route::get('render-list-location', 'renderListLocation')->name('components.render-list-location');
    Route::get('render-form-location', 'renderFormLocation')->name('components.render-form-location');
});
