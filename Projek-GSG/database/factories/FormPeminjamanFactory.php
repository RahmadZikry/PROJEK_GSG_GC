<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormPeminjaman>
 */
class FormPeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idPeminjaman = \App\Models\peminjaman::pluck('id')->toArray();
        $idUser = \App\Models\User::pluck('id')->toArray();
        return [
            'peminjaman_id' => $this->faker->randomElement($idPeminjaman),
            'user_id' => $this->faker->randomElement($idUser),
            'tanggal_peminjaman' => $this->faker->date(),
            'tanggal_pengembalian' => $this->faker->date(),
            'metode_pembayaran' => $this->faker->randomElement(['Tunai','Non_Tunai']),
            'image' => $this->faker->sentence(),
            'status_pembayaran' => $this->faker->randomElement(['Sukses','Gagal','Menunggu']),
            'status_verifikasi' => $this->faker->randomElement(['Disetujui','Ditolak','Tertunda']),
            'tujuan_peminjaman' => $this->faker->sentence(),
            'nomor_hp' => $this->faker->sentence(),
            'pesan' => $this->faker->sentence(),
        ];
    }
}
