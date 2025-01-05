<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormPeminjamanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Middleware\UserAccess;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth', UserAccess::class . 'admin'], function () {
    Route::get('admin', [HomeController::class, 'index'])->name('admin.home');
    Route::resources([
        'peminjaman' => PeminjamanController::class,
        'notifikasi' => NotifikasiController::class,
    ]);
});


Route::group(['middleware' => 'auth', UserAccess::class . 'pengguna'], function () {
    Route::get('pengguna', [HomeController::class, 'index'])->name('pengguna.home');
    Route::resources([
        'peminjamanForm' => FormPeminjamanController::class,
    ]);
});

Route::group(['middleware' => 'auth', UserAccess::class . 'keuangan'], function () {
    Route::get('keuangan', [HomeController::class, 'index'])->name('keuangan.home');
    Route::get('pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
    Route::get('data_pembayaran', [PembayaranController::class, 'dataIndex'])->name('pembayaran.dataIndex');
    Route::post('pembayaran/{id}/status', [PembayaranController::class, 'updateStatus'])->name('pembayaran.updateStatus');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


// Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class,'index']);