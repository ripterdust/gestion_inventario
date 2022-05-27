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

// Laboratory
use App\Http\Controllers\LaboratoryController;

// Sales
use App\Http\Controllers\SalesController;

// ******** ROUTER

// **** Validation
Route::get('/', function(){
    return redirect()->route('home');
})
    ->middleware('auth');

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

Route::get('/tests/new', [TestController::class, 'create'])
    ->middleware('auth')
    ->name('test.new');

Route::post('/tests', [TestController::class, 'store'])
    ->middleware('auth')
    ->name('test.store');

Route::get('/tests/edit/{id}', [TestController::class, 'edit'])
    ->middleware('auth')
    ->name('test.edit');

// Cients
Route::get('/clients', [ClientController::class, 'index'])
    ->middleware('auth')
    ->name('clients');

Route::get('/clients/new', [ClientController::class, 'create'])
    ->middleware('auth')
    ->name('clients.new');

// Sales
Route::get('/sales', [SalesController::class, 'index'])
    ->middleware('auth')
    ->name('sales');

// Laboratory

Route::get('/laboratory', [LaboratoryController::class, 'index'])
    ->middleware('auth')
    ->name('laboratory');

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
