<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::resource('/destinasi', DestinasiController::class);
Route::resource('/jasa', JasaController::class);

Route::get('register', function () {
    return view('auth.register'); // Buat view untuk registrasi
})->name('register');

Route::post('register', [AuthController::class, 'register']);

Route::get('login', function () {
    return view('auth.login'); // Buat view untuk login
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return view('beranda'); // Ganti dengan view yang sesuai
})->middleware('auth');

Route::get('/payment', function () {
    // Logic untuk menampilkan halaman 'payment.index'
    return view('payment.index');
})->name('payment.index'); 

Route::post('/payment', [PaymentController::class, 'createTransaction']);
Route::get('/payment', [PaymentController::class, 'createTransaction']);

Route::get('/jasa', [JasaController::class, 'index']);
Route::post('/jasa/transaction', 'JasaController@createTransaction');

Route::middleware(['auth'])->group(function () {
    Route::post('/payments/callback', [PaymentController::class, 'callback'])->name('payments.callback');
    Route::resource('payments', PaymentController::class)->only(['index', 'create', 'store', 'show']);
});

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');

Route::post('/jasa/transaction', [JasaController::class, 'createTransaction']);