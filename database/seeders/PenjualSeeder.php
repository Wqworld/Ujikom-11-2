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
        Penjual::create([
            'nama_penjual' => 'Waqqir penjual',
            'username' => 'w',
            'password'=> 'w',
            'alamat_penjual'=> 'ciwidey',
            'nomor_hp'=> 852189,
            'tanggal_masuk_hewan' => now(),
            'umur_penjual'=> 17,
            'created_at' => now(),
            'updated_at'=> now(),
        ]);

        Penjual::factory()->count(5)->create();
    }
}
