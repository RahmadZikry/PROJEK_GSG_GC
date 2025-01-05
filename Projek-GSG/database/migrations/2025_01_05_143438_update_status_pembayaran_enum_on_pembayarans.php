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
        Schema::table('pembayarans', function (Blueprint $table) {
            // Ubah kolom status_pembayaran untuk menambahkan 'Menunggu'
            $table->enum('status_pembayaran', ['Sukses', 'Gagal', 'Menunggu'])->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembayarans', function (Blueprint $table) {
            // Kembalikan ke enum awal (tanpa 'Menunggu')
            $table->enum('status_pembayaran', ['Sukses', 'Gagal'])->change();
        });
    }
};