<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangDitemukan extends Model
{
    use HasFactory;

    protected $table = 'barang_ditemukan';

    protected $fillable = [
        'user_id',
        'nama_barang',
        'deskripsi',
        'lokasi_ditemukan',
        'tanggal_ditemukan',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
