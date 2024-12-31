<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\NotifikasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\UserAccess;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resources([
        'fasilitas' => FasilitasController::class,
        'peminjaman' => PeminjamanController::class,
        'pembayaran' => PembayaranController::class,
        'notifikasi' => NotifikasiController::class,
    ]);
});


Route::middleware(['auth', UserAccess::class . ':pengguna'])->group(function () {
    Route::get('pengguna', [App\Http\Controllers\HomeController::class, 'penggunaHome'])->name('pengguna.home');

});

Route::middleware(['auth', UserAccess::class . ':keuangan'])->group(function () {
    Route::get('keuangan', [App\Http\Controllers\HomeController::class, 'keuanganHome'])->name('keuangan.home');
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