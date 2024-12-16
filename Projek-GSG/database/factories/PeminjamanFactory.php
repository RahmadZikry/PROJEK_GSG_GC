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
        $idFasilitas = \App\Models\Fasilitas::pluck('id')->toArray();
        $idUser = \App\Models\User::pluck('id')->toArray();
        return [
            'fasilitas_id' => $this->faker->randomElement($idFasilitas),
            'user_id' => $this->faker->randomElement($idUser),
            'tanggal_peminjaman' => $this->faker->date(),
            'tanggal_pengembalian' => $this->faker->date(),
            'status_verifikasi' => $this->faker->randomElement(['Tertunda','Disetujui','Ditolak']),
            // 'bukti_pembayaran' => $this->faker->sentence(),
        ];
    }
}
