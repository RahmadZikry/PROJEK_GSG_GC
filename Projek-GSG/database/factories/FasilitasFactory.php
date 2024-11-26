<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasilitas>
 */
class FasilitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idFasilitas = \App\Models\Fasilitas::pluck('fasilitas_id')->toArray();
        return [
            'fasilitas_id' => $this->faker->randomElement($idFasilitas),
            'nama_fasilitas' => $this->faker->sentence(),
            'deskripsi'=>$this->faker->sentence(),
            'harga_sewa'=>$this->faker->numberBetween(100000,900000),
            'status_ketersediaan'=>$this->faker->randomElement(['Tersedia','Tidak Tersedia']),
        ];
    }
}
