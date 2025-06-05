<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjual', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penjual');
            $table->integer('umur_penjual');
            $table->date('tanggal_masuk_hewan');
            $table->string('nomor_hp');
            $table->string('alamat_penjual');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjual');
    }
};
