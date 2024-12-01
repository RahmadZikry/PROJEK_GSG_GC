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
    Route::resource('verifikasi', App\Http\Controllers\VerifikasiController::class);
});


// Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class,'index']);