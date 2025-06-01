<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nama_admin' => 'Waqqir Admin',
            'username' => 'wqwq',
            'password'=> 'wqwq',
            'created_at' => now(),
            'updated_at'=> now(),
        ]);
    }
}
