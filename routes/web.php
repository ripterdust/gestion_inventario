<?php

use Illuminate\Support\Facades\Route;
// My controllers

// Dashboard
use App\Http\Controllers\DashboardController;

// Employees 
use App\Http\Controllers\EmployeesController;

// Login
use App\Http\Controllers\SessionsController;

// Register
use App\Http\Controllers\RegisterController;

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

// **** Admin panel
// Dashboard
Route::get('/', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('home');


// Employees
Route::get('/employees', [EmployeesController::class, 'index'])
    ->middleware('auth')
    ->name('home');

// ******* Authentication

// Login
Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [SessionsController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

// Log out
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.out');

// Register
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest')
    ->name('register.store');
