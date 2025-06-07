<?php

namespace Database\Factories;

use App\Models\Penjual;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hewan>
 */
class HewanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $penjual = Penjual::all()->count();
        return [
            "jenis" => $this->faker->randomElement(['Kambing','Sapi','Domba']),
            "status" => $this->faker->randomElement(['Ready','Tidak Ready']),
            "deks_Hewan" => $this->faker->paragraph(2),
            "gambar" => 'no-foto-yet.jpg',
            "umur_hewan" => $this->faker->numberBetween(1, 5),
            "kesehatan"=> $this->faker->word,
            "harga_hewan" => $this->faker->numberBetween(1000, 10000),
            "berat_hewan" => $this->faker->numberBetween(1000, 10000),
            "hargadp_hewan" => $this->faker->numberBetween(1000, 10000),
            "id_penjual" => $this->faker->numberBetween(1,$penjual),
            "created_at" => now(),
            "updated_at"=> now(),
        ];
    }
}
