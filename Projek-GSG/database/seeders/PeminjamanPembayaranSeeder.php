<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanPembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
        {
            // Seed data untuk tabel peminjaman
            $peminjamanData = [
                [
                    'user_id' => 1,
                    'tanggal_peminjaman' => '2025-01-01',
                    'tanggal_pengembalian' => '2025-01-05',
                    'metode_pembayaran' => 'Tunai',
                    'status_pembayaran' => 'Sukses',
                    'status_verifikasi' => 'Tertunda',
                    'nomor_hp' => '081234567890', // Tambahan nomor HP
                    'tujuan_peminjaman' => 'Rapat Tim', // Tujuan peminjaman
                    'pesan' => 'Mohon siapkan ruangan dengan proyektor.', // Pesan tambahan
                    'image' => 'public/images/bukti1.jpg', // Pastikan file ini ada di storage
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 2,
                    'tanggal_peminjaman' => '2025-01-02',
                    'tanggal_pengembalian' => '2025-01-06',
                    'metode_pembayaran' => 'Non_Tunai',
                    'status_pembayaran' => 'Menunggu',
                    'status_verifikasi' => 'Ditolak',
                    'nomor_hp' => '081298765432', // Tambahan nomor HP
                    'tujuan_peminjaman' => 'Pelatihan Karyawan', // Tujuan peminjaman
                    'pesan' => 'Butuh meja dan kursi tambahan.', // Pesan tambahan
                    'image' => 'public/images/bukti2.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 3,
                    'tanggal_peminjaman' => '2025-01-03',
                    'tanggal_pengembalian' => '2025-01-07',
                    'metode_pembayaran' => 'Tunai',
                    'status_pembayaran' => 'Gagal',
                    'status_verifikasi' => 'Disetujui',
                    'nomor_hp' => '081356789012', // Tambahan nomor HP
                    'tujuan_peminjaman' => 'Acara Sosial', // Tujuan peminjaman
                    'pesan' => 'Mohon pastikan ruangan bersih sebelum digunakan.', // Pesan tambahan
                    'image' => 'public/images/bukti3.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ];

            foreach ($peminjamanData as $peminjaman) {
                $peminjamanId = DB::table('peminjaman')->insertGetId($peminjaman);

                // Seed data untuk tabel pembayaran
                $pembayaranData = [
                    'peminjaman_id' => $peminjamanId,
                    'user_id' => $peminjaman['user_id'],
                    'tanggal_peminjaman' => $peminjaman['tanggal_peminjaman'],
                    'tanggal_pengembalian' => $peminjaman['tanggal_pengembalian'],
                    'status_pembayaran' => $peminjaman['status_pembayaran'],
                    'metode_pembayaran' => $peminjaman['metode_pembayaran'],
                    'image' => $peminjaman['image'], // Correct key used here
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Insert data pembayaran
                DB::table('pembayarans')->insert($pembayaranData);
            }
        }
}