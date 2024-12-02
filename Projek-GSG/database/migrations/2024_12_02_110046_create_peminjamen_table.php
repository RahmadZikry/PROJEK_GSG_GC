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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_id');
            $table->foreignId('user_id');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->enum('status_verifikasi', ['Tertunda','Disetujui','Ditolak']);
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
