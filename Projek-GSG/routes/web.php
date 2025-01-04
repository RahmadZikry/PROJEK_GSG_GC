<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FormPeminjamanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Middleware\UserAccess;
use App\Models\FormPeminjaman;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth', UserAccess::class . 'admin'], function () {
    Route::get('admin', [HomeController::class, 'index'])->name('admin.home');
    Route::resources([
        'fasilitas' => FasilitasController::class,
        'peminjaman' => PeminjamanController::class,
        'notifikasi' => NotifikasiController::class,
    ]);
});


Route::group(['middleware' => 'auth', UserAccess::class . 'pengguna'], function () {
    Route::get('pengguna', [HomeController::class, 'index'])->name('pengguna.home');
    Route::resources([
        'peminjamanForm' => FormPeminjamanController::class,
        'peminjaman' => PeminjamanController::class,
        'pembayaran' => PembayaranController::class,
        'notifikasi' => NotifikasiController::class,
    ]);
});

Route::group(['middleware' => 'auth', UserAccess::class . 'keuangan'], function () {
    Route::get('keuangan', [HomeController::class, 'index'])->name('keuangan.home');
    Route::resources([
        'pembayaran' => PembayaranController::class,
    ]);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


// Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class,'index']);