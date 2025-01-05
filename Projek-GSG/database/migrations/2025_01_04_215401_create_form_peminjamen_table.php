<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_id')->constrained('peminjamen');
            $table->foreignId('user_id')->constrained('users');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->enum('metode_pembayaran', ['Tunai', 'Non_Tunai']);
            $table->enum('status_pembayaran', ['Sukses', 'Gagal', 'Menunggu']);
            $table->enum('status_verifikasi', ['Tertunda', 'Disetujui', 'Ditolak']);
            $table->text('tujuan_peminjaman');
            $table->string('nomor_hp');
            $table->text('pesan');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_peminjamen');
    }
};
