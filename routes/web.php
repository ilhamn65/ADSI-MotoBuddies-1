<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookServiceController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MyBookingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddVehicleController;

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

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/add-vehicle', [AddVehicleController::class, 'index'])->name('addVehicle');
Route::post('/profile/add-vehicle', [AddVehicleController::class, 'store']);

Route::get('/book', [BookServiceController::class, 'index'])->name('book')->middleware('auth');
Route::post('/book', [BookServiceController::class, 'store']);
Route::get('/book/success', function () {
    return view('book.success');
})->name('book.success');

Route::get('/mybookings', [MyBookingsController::class, 'index'])->name('myBookings');

Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('orderHistory')->middleware('auth');



//testroute --- add service data

Route::get('/service/test/add/123123123', [ServiceController::class, 'store']);

//finddealer
Route::get('/finddealer', function(){
    return view('finddealer.index');})->name('find.dealer');