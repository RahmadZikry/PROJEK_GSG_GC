<?php

use App\Http\Middleware\UserAccess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', UserAccess::class . ':admin'])->group(function () {
    Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    //Route::resource('admin/pengguna', App\Http\Controllers\FasilitasController::class);
    Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);
    Route::resource('peminjaman', App\Http\Controllers\PeminjamanController::class);
    Route::resource('pembayaran', App\Http\Controllers\PembayaranController::class);
    Route::resource('notifikasi', App\Http\Controllers\NotifikasiController::class);
});

Route::middleware(['auth', UserAccess::class . ':pengguna'])->group(function () {
    Route::get('pengguna', [App\Http\Controllers\HomeController::class, 'penggunaHome'])->name('pengguna.home');

});

Route::middleware(['auth', UserAccess::class . ':keuangan'])->group(function () {
    Route::get('keuangan', [App\Http\Controllers\HomeController::class, 'keuanganHome'])->name('keuangan.home');

});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

// Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class,'index']);
