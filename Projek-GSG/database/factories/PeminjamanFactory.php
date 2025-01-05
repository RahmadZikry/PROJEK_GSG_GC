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
        $idUser = \App\Models\User::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($idUser),
            'tanggal_peminjaman' => $this->faker->dateTimeBetween('-1 week', 'now')->format('Y-m-d'), // Tanggal peminjaman antara 1 minggu lalu hingga sekarang
            'tanggal_pengembalian' => $this->faker->dateTimeBetween('now', '+1 week')->format('Y-m-d'), // Tanggal pengembalian antara sekarang hingga 1 minggu ke depan
            'metode_pembayaran' => $this->faker->randomElement(['Tunai', 'Non_Tunai']), // Random metode pembayaran
            'image' => $this->faker->imageUrl(640, 480, 'payments', true, 'bukti_pembayaran'), // Gambar acak untuk bukti pembayaran
            'status_pembayaran' => $this->faker->randomElement(['Sukses', 'Gagal', 'Menunggu']), // Random status pembayaran
            'status_verifikasi' => $this->faker->randomElement(['Tertunda', 'Disetujui', 'Ditolak']), // Random status verifikasi
            'nomor_hp' => $this->faker->phoneNumber, // Nomor telepon acak
            'tujuan_peminjaman' => $this->faker->sentence(6), // Kalimat acak sebagai tujuan peminjaman
            'pesan' => $this->faker->paragraph(2), // Paragraf acak sebagai pesan tambahan
        ];
    }
}