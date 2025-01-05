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
            'tanggal_peminjaman' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'tanggal_pengembalian' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'metode_pembayaran' => $this->faker->randomElement(['Tunai', 'Non_Tunai']),
            'status_pembayaran' => $this->faker->randomElement(['Sukses', 'Gagal','Menunggu']),
            'status_verifikasi' => $this->faker->randomElement(['Tertunda', 'Disetujui', 'Ditolak']),
        ];
    }
}