<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LostItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangHilangController;
use App\Http\Controllers\BarangDitemukanController;
use App\Http\Controllers\KonfirmasiController;

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
Route::get('/kategori/{slug}', function ($slug) {
    return "Halaman kategori: $slug";
})->name('category.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $lostCategories = [
        ['category' => 'Elektronik', 'count' => 12, 'image' => asset('images/lost/elektronik.svg'), 'slug' => 'elektronik'],
        ['category' => 'Pakaian', 'count' => 8, 'image' => asset('images/lost/pakaian.svg'), 'slug' => 'pakaian'],
        ['category' => 'Aksesoris', 'count' => 15, 'image' => asset('images/lost/aksesoris.svg'), 'slug' => 'aksesoris'],
        ['category' => 'Dokumen', 'count' => 5, 'image' => asset('images/lost/dokumen.svg'), 'slug' => 'dokumen'],
        ['category' => 'Tas & Dompet', 'count' => 9, 'image' => asset('images/lost/tas.svg'), 'slug' => 'tas-dompet'],
        ];

        $foundCategories = [
            ['category' => 'Elektronik', 'count' => 18, 'image' => asset('images/found/elektronik.svg'), 'slug' => 'elektronik'],
            ['category' => 'Pakaian', 'count' => 10, 'image' => asset('images/found/pakaian.svg'), 'slug' => 'pakaian'],
            ['category' => 'Aksesoris', 'count' => 22, 'image' => asset('images/found/aksesoris.svg'), 'slug' => 'aksesoris'],
            ['category' => 'Dokumen', 'count' => 7, 'image' => asset('images/found/dokumen.svg'), 'slug' => 'dokumen'],
            ['category' => 'Tas & Dompet', 'count' => 14, 'image' => asset('images/found/tas.svg'), 'slug' => 'tas-dompet'],
        ];

        return view('dashboard', compact('lostCategories', 'foundCategories'));

    })->name('dashboard');

    Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/barang/hilang/tambah', [BarangHilangController::class, 'create'])->name('barang.tambah');
        Route::post('/barang/hilang/store', [BarangHilangController::class, 'store'])->name('barang.store');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/barang/ditemukan/tambah', [BarangDitemukanController::class, 'create'])->name('ditemukan.tambah');
        Route::post('/barang/ditemukan/tambah', [BarangDitemukanController::class, 'store'])->name('ditemukan.store');
    });


    Route::get('/barang/konfirmasi', [KonfirmasiController::class, 'index'])
    ->name('barang.konfirmasi');


});










