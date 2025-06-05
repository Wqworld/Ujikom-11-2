<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hewan extends Model
{
    /** @use HasFactory<\Database\Factories\HewanFactory> */
    use HasFactory;

    protected $table = 'hewan';
    protected $fillable = ['jenis','status','deks_hewan','gambar','umur_hewan','kesehatan', 'harga_hewan','berat_hewan','hargadp_hewan','id_penjual'];

    public function penjual():BelongsTo{
        return $this->belongsTo(Penjual::class, 'id_penjual','id');
    }
}
