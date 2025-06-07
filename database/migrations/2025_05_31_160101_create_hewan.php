<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis',['Kambing','Sapi','Domba','Hewan'])->default('Hewan');
            $table->enum('status',['Ready','Tidak Ready']);
            $table->text('deks_Hewan');
            $table->text('gambar');
            $table->integer('umur_hewan');
            $table->string('kesehatan');
            $table->decimal('harga_hewan',15,2);
            $table->float('berat_hewan');
            $table->decimal('hargadp_hewan',15,2);
            $table->foreignId('id_penjual')->constrained('penjual')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewan');
    }
};
