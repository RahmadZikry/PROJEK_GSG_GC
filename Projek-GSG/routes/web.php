<?php

use App\Http\Middleware\UserAccess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\FormPeminjamanController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth', UserAccess::class . 'admin'], function () {
    Route::get('admin', [HomeController::class, 'index'])->name('admin.home');
    Route::get('data_peminjaman', [PeminjamanController::class, 'dataindex'])->name('dataindex.home');
    Route::get('peminjaman/{id}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
    Route::post('peminjaman/{peminjaman}/updateStatus', [PeminjamanController::class, 'updateStatus'])
    ->name('peminjaman.updateStatus');
    Route::resources([
        'peminjaman' => PeminjamanController::class,
        'kalender' => KalenderController::class,
        'notifikasi' => NotifikasiController::class,
    ]);
});


Route::group(['middleware' => 'auth', UserAccess::class . 'pengguna'], function () {
    Route::get('pengguna', [HomeController::class, 'index'])->name('pengguna.home');
    Route::post('/peminjamanForm', [FormPeminjamanController::class, 'store'])->name('peminjamanForm.store');
    Route::resources([
        'peminjamanForm' => FormPeminjamanController::class,
        'syarat' => SyaratController::class,
        'pesan' => PesanController::class,
    ]);
});

Route::group(['middleware' => 'auth', UserAccess::class . 'keuangan'], function () {
    Route::get('keuangan', [HomeController::class, 'index'])->name('keuangan.home');
    Route::get('data_pembayaran', [PembayaranController::class, 'dataIndex'])->name('data_pembayaran.home');
    Route::post('pembayaran/{peminjaman}/updateStatus', [PembayaranController::class, 'updateStatus'])
    ->name('pembayaran.updateStatus');
    Route::resources([
        'pembayaran' => PembayaranController::class,
    ]);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


// Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class,'index']);