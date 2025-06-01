<?php

namespace Database\Seeders;

use App\Models\Penjual;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjual::factory()->count(5)->create();
    }
}
