<?php

use Illuminate\Support\Facades\Route;

// ***** Controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\InventoryController;

// ******** ROUTER

// **** Validation
Route::get('/', function () {
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

Route::get('/tests/{id}/edit', [TestController::class, 'edit'])
    ->middleware('auth')
    ->name('test.edit');

Route::patch('/test/{id}/update', [TestController::class, 'update'])
    ->middleware('auth')
    ->name('test.patch');


Route::get('tests/{id}/result', [TestController::class, 'show'])
    ->middleware('auth')
    ->name('test.show');
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

// Inventory
Route::get('/inventory', [InventoryController::class, 'index'])
    ->middleware('auth')
    ->name('inventory');

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