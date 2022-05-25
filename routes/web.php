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

// Tests
use App\Http\Controllers\TestController;

// Clientes
use App\Http\Controllers\ClientController;

// **** Admin panel
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('home');


// Employees
Route::get('/employees', [EmployeesController::class, 'index'])
    ->middleware('auth')
    ->name('employees');

// Tests
Route::get('/tests', [TestController::class, 'index'])
    ->middleware('auth')
    ->name('tests');


// Cientes
Route::get('/clients', [ClientController::class, 'index'])
    ->middleware('auth')
    ->name('clients');

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
