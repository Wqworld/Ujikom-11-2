<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penjual extends Model
{
    /** @use HasFactory<\Database\Factories\PenjualFactory> */
    use HasFactory;

    protected $table = 'penjual';
    protected $fillable = ['nama_penjual','umur_penjual','nomor_hp','alamat_penjual','username','password'];

    public function hewan():HasMany{
        return $this->hasMany(Hewan::class);
    }

    
}
