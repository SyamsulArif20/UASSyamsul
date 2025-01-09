<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rute untuk Customers
Route::resource('customers', CustomerController::class);

// Rute untuk Packages
Route::resource('packages', PackageController::class);

// Rute untuk Drivers
Route::resource('drivers', DriverController::class);

// Rute untuk Branches
Route::resource('branches', BranchController::class);

// Rute untuk Transactions
Route::resource('transactions', TransactionController::class);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
