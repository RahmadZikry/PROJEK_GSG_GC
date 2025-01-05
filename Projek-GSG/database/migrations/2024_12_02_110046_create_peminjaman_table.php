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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // Foreign key untuk user
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->enum('metode_pembayaran', ['Tunai', 'Non_Tunai']);
            $table->string('image')->nullable(); // Untuk menyimpan bukti pembayaran
            $table->enum('status_pembayaran', ['Sukses', 'Gagal', 'Menunggu']); // Status pembayaran
            $table->enum('status_verifikasi', ['Tertunda', 'Disetujui', 'Ditolak']); // Status verifikasi
            $table->string('nomor_hp'); // Nomor HP
            $table->string('tujuan_peminjaman'); // Tujuan peminjaman
            $table->text('pesan')->nullable(); // Pesan atau detail tambahan, optional
            $table->timestamps(); // created_at dan updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};