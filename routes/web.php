<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ProductsController;
//
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\StoresController;

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

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

Route::domain('shop.' . env("APP_DOMAIN"))->middleware('auth')->group(function () {
    Route::controller(StoresController::class)->middleware('auth')->group(function () {
        // trang chủ cửa hàng
        Route::get('/', 'index')->name('manager.shop')->middleware('storeMiddleware');
        Route::prefix('shop')->group(function () {

            Route::match(['GET', 'POST'], 'register', request()->isMethod('get') ? 'registerShop' : 'register')->name('register.shop');
            Route::match(['GET', 'POST'], 'register/address', request()->isMethod('get') ? 'registerAddress' : 'register')->name('shop.register-address');
            Route::get('logout', 'logout')->name('shop.logout');

            Route::get('register/address-offline-shop', 'addressOffline')->name('shop.register-address-offline');
            Route::put('register/address-offline/{id}', 'UpdateAddressOffline')->name('manager.shop-update');

            Route::get('{slug}', 'detail')->name('manager.shop-detail')->middleware('storeMiddleware');
            Route::put('{slug}', 'update')->name('manager.update.shop')->middleware('storeMiddleware');
        });
    });
});

Route::prefix('blog')->group(base_path('routes/routesGroup/blog.php'));
Route::prefix('category')->group(base_path('routes/routesGroup/category.php'));
Route::prefix('location')->group(base_path('routes/routesGroup/address.php'));
Route::prefix('order')->group(base_path('routes/routesGroup/order.php'));








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
    Route::get('/product-details/{id}-{name_product}', [ProductsController::class, 'productDetails'])->name('productDetails');
    Route::get('/search', [ProductsController::class, 'search'])->name('search');
    Route::post('/products/{id_product}/{name_product}/comment', [CommentController::class, 'comment'])->name('product.comment');
});





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::controller(ComponentController::class)->group(function () {
    Route::get('render-provinces', 'renderProvinces')->name('components.render-provinces');
    Route::get('render-list-location', 'renderListLocation')->name('components.render-list-location');
    Route::get('render-form-location', 'renderFormLocation')->name('components.render-form-location');
});
