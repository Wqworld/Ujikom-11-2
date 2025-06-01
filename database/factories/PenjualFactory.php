<?php

namespace Database\Factories;

use App\Models\Hewan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjual>
 */
class PenjualFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_penjual" => $this->faker->name(),
            "umur_penjual" => $this->faker->numberBetween(15,50),
            "tanggal_masuk_hewan" => $this->faker->dateTime(),
            "nomor_hp" => $this->faker->randomNumber(9, true),
            "alamat_penjual" => $this->faker->address(),

        ];
    }
}
