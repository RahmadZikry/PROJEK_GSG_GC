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
            'tanggal_peminjaman' => $this->faker->dateTimeBetween('-1 month', 'now'), // Rentang waktu peminjaman
            'tanggal_pengembalian' => $this->faker->dateTimeBetween('now', '+1 month'), // Rentang waktu pengembalian
            'metode_pembayaran' => $this->faker->randomElement(['Tunai', 'Non_Tunai']), // Pilihan metode
            'image' => 'public/images/bukti' . $this->faker->numberBetween(1, 5) . '.jpg', // File bukti pembayaran
            'status_pembayaran' => $this->faker->randomElement(['Sukses', 'Gagal', 'Menunggu']), // Status pembayaran
            'status_verifikasi' => $this->faker->randomElement(['Disetujui', 'Ditolak', 'Tertunda']), // Status verifikasi
            'nomor_hp' => $this->faker->numerify('08##########'), // Nomor telepon
            'tujuan_peminjaman' => $this->faker->sentence(3), // Tujuan peminjaman
            'pesan' => $this->faker->sentence(6), // Pesan tambahan
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}