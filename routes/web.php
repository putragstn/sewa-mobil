<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\RentalCarController;
use App\Http\Controllers\ReturnCarController;
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
    return view('auth.login', [
        'title'         => 'Login',
    ]);
});

Route::post('/', [AuthController::class, 'dologin']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/registrasi', [AuthController::class, 'index']);
Route::post('/registrasi', [AuthController::class, 'storeRegister']);

Route::get('/dashboard', [DashboardAdminController::class, 'index']);

Route::resource('/manajemen-mobil', CarController::class);
Route::resource('/rent-car', RentalCarController::class);

Route::get('/return-car/search', [ReturnCarController::class, 'search']);
Route::resource('/return-car', ReturnCarController::class);
