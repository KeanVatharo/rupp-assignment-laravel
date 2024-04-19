<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminCarController;
use App\Http\Controllers\Admin\AdminServiceController;

Route::view('/', 'welcome')->name('homepage');
Route::view('/about', 'about');

Route::get('/cars', CarController::class);
Route::get('/services', ServiceController::class);

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::delete('/login', [LoginController::class, 'destroy'])->name('login.destroy');

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});


// Admin
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('cars', AdminCarController::class);
    Route::resource('services', AdminServiceController::class);

    Route::get('/admin', [AdminController::class, 'index']);
});
