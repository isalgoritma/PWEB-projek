<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LostItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Simple skeleton auth views
Route::get('/login', function(){ return view('auth.login'); })->name('login');
Route::get('/register', function(){ return view('auth.register'); })->name('register');

// Dashboard (example)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Resource routes for lost & found items (CRUD)
Route::resource('lost', LostItemController::class);

Route::post('/login-proses', [AuthController::class, 'loginProses'])->name('login.proses');
Route::post('/register-proses', [AuthController::class, 'registerProses'])->name('register.proses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
