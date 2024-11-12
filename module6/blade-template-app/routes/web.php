<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\ShopNowController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// load a oraganic templates Home page routing
Route::get('/',[HomeController::class,'index']);
Route::get('/contact-us',[ContactController::class,'index']);
Route::get('/create-account',[CreateAccountController::class,'index']);
Route::get('/login-here',[CreateAccountController::class,'login']);
Route::get('/all-products',[ShopNowController::class,'index']);
Route::get('/our-blogs',[BlogsController::class,'index']);
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/dashboard',[AdminDashboardController::class,'index']);