<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

// category
Route::resource("/category",CategoryController::class);

// Banner
Route::resource("/banner",BannerController::class);


//login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login_user',[AdminController::class,'login']);


//Register
Route::get('/register', function () {
    return view('register');
});
Route::post('/register_user',[AdminController::class,'register']);

//coupon
Route::resource('/coupon',CouponController::class);

//Api
// Route::get('/api_data', [ApiController::class,'register']);
Route::post('/api_register',[ApiController::class,'register_user']);

// Route::get('/api_data', [ApiController::class,'login']);
Route::post('/api_login',[ApiController::class,'login_user']);


//product
Route::resource("/product",ProductController::class);