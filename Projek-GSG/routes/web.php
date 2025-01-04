<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\NotifikasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', [HomeController::class, 'index'])->name('admin.home');
    Route::resources([
        'fasilitas' => FasilitasController::class,
        'peminjaman' => PeminjamanController::class,
        'pembayaran' => PembayaranController::class,
        'notifikasi' => NotifikasiController::class,
    ]);
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('pengguna', [HomeController::class, 'index'])->name('pengguna.home');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('keuangan', [HomeController::class, 'index'])->name('keuangan.home');
    Route::resources([
        'fasilitas' => FasilitasController::class,
        'peminjaman' => PeminjamanController::class,
        'pembayaran' => PembayaranController::class,
        'notifikasi' => NotifikasiController::class,
    ]);

});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


// Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class,'index']);
