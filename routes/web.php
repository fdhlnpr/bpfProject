<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

// Rute default aplikasi
Route::get('/', function () {
    // Mengembalikan view 'welcome' saat pengguna mengakses root URL
    return view('welcome');
});

// Rute untuk halaman beranda
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda'); 
// Memanggil metode index di BerandaController dan memberikan nama rute 'beranda'

// Rute resource untuk Destinasi
Route::resource('/destinasi', DestinasiController::class); 
// Menyediakan operasi CRUD otomatis untuk DestinasiController

// Rute resource untuk Jasa
Route::resource('/jasa', JasaController::class); 
// Menyediakan operasi CRUD otomatis untuk JasaController

// Rute untuk registrasi pengguna
Route::get('register', function () {
    // Menampilkan view 'auth.register' untuk formulir registrasi
    return view('auth.register');
})->name('register');

Route::post('register', [AuthController::class, 'register']); 
// Mengirim data registrasi ke metode register di AuthController

// Rute untuk login pengguna
Route::get('login', function () {
    // Menampilkan view 'auth.login' untuk formulir login
    return view('auth.login');
})->name('login');

Route::post('login', [AuthController::class, 'login']); 
// Mengirim data login ke metode login di AuthController

// Rute untuk logout pengguna
Route::post('logout', [AuthController::class, 'logout'])->name('logout'); 
// Menggunakan metode logout di AuthController untuk keluar dari sesi

// Rute dashboard untuk pengguna yang diautentikasi
Route::get('dashboard', function () {
    // Menampilkan view 'beranda' hanya jika pengguna terautentikasi
    return view('beranda');
})->middleware('auth');

// Rute untuk pembayaran
Route::post('/payment', [PaymentController::class, 'createTransaction']); 
// Menangani permintaan POST untuk membuat transaksi pembayaran

Route::get('/payment', [PaymentController::class, 'createTransaction']); 
// Menangani permintaan GET untuk halaman transaksi pembayaran

// Rute tambahan untuk Jasa
Route::get('/jasa', [JasaController::class, 'index']); 
// Menampilkan daftar jasa dengan metode index di JasaController

Route::post('/jasa/transaction', 'JasaController@createTransaction'); 
// Menangani transaksi jasa dengan metode createTransaction

// Kelompok rute dengan middleware 'auth' (hanya untuk pengguna terautentikasi)
Route::middleware(['auth'])->group(function () {
    // Callback untuk pembayaran
    Route::post('/payments/callback', [PaymentController::class, 'callback'])->name('payments.callback'); 
    // Menangani callback dari sistem pembayaran

    // Resource untuk pembayaran dengan metode terbatas
    Route::resource('payments', PaymentController::class)->only(['index', 'create', 'store', 'show']); 
    // Menyediakan hanya metode tertentu untuk PaymentController
});

// Rute transaksi jasa
Route::post('/jasa/transaction', [JasaController::class, 'createTransaction']); 
// Mengelola transaksi jasa dengan metode createTransaction di JasaController
