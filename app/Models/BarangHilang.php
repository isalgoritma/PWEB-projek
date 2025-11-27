<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangHilang extends Model
{
    protected $table = 'barang_hilang';

    protected $fillable = [
        'user_id',
        'nama_barang',
        'deskripsi',
        'tanggal_kehilangan',
        'lokasi_kehilangan',
        'foto'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
