<?php

use Illuminate\Support\Facades\Route;
// My controllers

// Dashboard
use App\Http\Controllers\DashboardController;

// Login
use App\Http\Controllers\SessionsController;


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

// Dashboard
Route::get('/', [DashboardController::class, 'index']);


// Authentication

// Login
Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login');