<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookServiceController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ProfileController;

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

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');


Route::get('/auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('/auth/register', [RegisterController::class, 'store']);

Route::get('/auth/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth/login', [LoginController::class, 'store']);

Route::get('/auth/forgotpassword', [ForgotPasswordController::class,'index'])->name('forgotpassword');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/book', [BookServiceController::class, 'index'])->name('book')->middleware('auth');

Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('orderHistory')->middleware('auth');
