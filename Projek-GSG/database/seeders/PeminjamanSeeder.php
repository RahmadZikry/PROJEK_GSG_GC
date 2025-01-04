<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('peminjamen')->insert([
            [

                'user_id' => 1,
                'tanggal_peminjaman' => '2025-01-01',
                'tanggal_pengembalian' => '2025-01-05',
                'metode_pembayaran' => 'Tunai',
                'status_pembayaran' => 'Sukses',
                'status_verifikasi' => 'Tertunda',
                'image' => 'public/images/bukti1.jpg', // Pastikan file ini ada di storage
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'tanggal_peminjaman' => '2025-01-02',
                'tanggal_pengembalian' => '2025-01-06',
                'metode_pembayaran' => 'Non_Tunai',
                'status_pembayaran' => 'Gagal',
                'status_verifikasi' => 'Ditolak',
                'image' => 'public/images/bukti2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'tanggal_peminjaman' => '2025-01-03',
                'tanggal_pengembalian' => '2025-01-07',
                'metode_pembayaran' => 'Tunai',
                'status_pembayaran' => 'Sukses',
                'status_verifikasi' => 'Disetujui',
                'image' => 'public/images/bukti3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}