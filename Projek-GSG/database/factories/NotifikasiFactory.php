<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notifikasi>
 */
class NotifikasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idNotifikasi = \App\Models\Notifikasi::pluck('id')->toArray();
        $idUser = \App\Models\User::pluck('id')->toArray();
        return [
            'notifikasi_id' => $this->faker->randomElement($idNotifikasi),
            'user_id' => $this->faker->randomElement($idUser),
            'judul_notifikasi' => $this->faker->sentence(),
            'isi_notifikasi' => $this->faker->sentence(),
            'tanggal_kirim' => $this->faker->date(),
            'status_baca' => $this->faker->randomElement(['Dibaca','Belum Dibaca']),
        ];
    }
}
