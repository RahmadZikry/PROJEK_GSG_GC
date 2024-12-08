<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pembayaran>
 */
class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idPembayaran = \App\Models\pembayaran::pluck('id')->toArray();
        $idPeminjaman = \App\Models\peminjaman::pluck('id')->toArray();
        $idUser = \App\Models\User::pluck('id')->toArray();
        return [
            'pembayaran_id' => $this->faker->randomElement($idPembayaran),
            'peminjaman_id' => $this->faker->randomElement($idPeminjaman),
            'user_id' => $this->faker->randomElement($idUser),
            'tanggal_pembayaran' => $this->faker->date(),
            'jumlah_pembayaran'=>$this->faker->numberBetween(100000,900000),
            'status_pembayaran' => $this->faker->randomElement(['Dikonfirmasi','Menunggu']),
            'metode_pembayaran' => $this->faker->sentence(),
        ];
    }
}
