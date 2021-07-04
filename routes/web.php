<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/customer', [LoginController::class,'showCustomerLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/customer', [RegisterController::class,'showCustomerRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/customer', [LoginController::class,'customerLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/customer', [RegisterController::class,'createCustomer']);

Route::group(['middleware' => 'auth:customer'], function () {
    Route::view('/customer', 'customer');
});

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::view('/admin', 'admin');
});

Route::get('logout', [LoginController::class,'logout']);