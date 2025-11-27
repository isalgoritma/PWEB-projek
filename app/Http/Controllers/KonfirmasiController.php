<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function index()
    {
        $kriteria = [
            ['nama' => 'Elektronik'],
            ['nama' => 'Kendaraan'],
            ['nama' => 'Aksesoris'],
            ['nama' => 'Dokumen'],
            ['nama' => 'Lainnya'],
        ];

        $barang = [
            ['nama' => 'Elektronik'],
            ['nama' => 'Kendaraan'],
            ['nama' => 'Aksesoris'],
            ['nama' => 'Dokumen'],
            ['nama' => 'Lainnya'],
        ];

        $admin = [
            'nomor' => '628123456789'
        ];

        return view('konfirmasi.index', compact('kriteria', 'barang', 'admin'));
    }
}
