<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // ID pengguna
            'tanggal_peminjaman' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'), // Rentang waktu peminjaman
            'tanggal_pengembalian' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'), // Rentang waktu pengembalian
            'metode_pembayaran' => $this->faker->randomElement(['Tunai', 'Non_Tunai']), // Pilihan metode pembayaran
            'image' => 'public/images/bukti' . $this->faker->numberBetween(1, 5) . '.jpg', // File bukti pembayaran
            'status_pembayaran' => $this->faker->randomElement(['Sukses', 'Gagal', 'Menunggu']), // Status pembayaran
            'status_verifikasi' => $this->faker->randomElement(['Disetujui', 'Ditolak', 'Tertunda']), // Status verifikasi
            'nomor_hp' => $this->faker->numerify('08##########'), // Nomor telepon
            'tujuan_peminjaman' => $this->faker->sentence(3, true), // Tujuan peminjaman dalam bahasa Indonesia
            'pesan' => $this->faker->sentence(6, true), // Pesan tambahan dalam bahasa Indonesia
            'harga' => $this->faker->numberBetween(100000, 1000000), // Harga, contoh antara 100.000 sampai 1.000.000
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}