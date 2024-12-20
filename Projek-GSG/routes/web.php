<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin', App\Http\Controllers\AdminController::class);
    Route::resource('pengguna', App\Http\Controllers\PenggunaController::class);
    Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);
    Route::resource('peminjaman', App\Http\Controllers\PeminjamanController::class);
    Route::resource('pembayaran', App\Http\Controllers\PembayaranController::class);
    Route::resource('notifikasi', App\Http\Controllers\NotifikasiController::class);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

// Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class,'index']);
