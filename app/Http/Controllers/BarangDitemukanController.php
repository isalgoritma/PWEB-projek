<?php

namespace App\Http\Controllers;

use App\Models\BarangDitemukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangDitemukanController extends Controller
{
    public function create()
    {
        // arahkan ke tampilan form tambah
        return view('barang.ditemukan.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'deskripsi' => 'required',
            'tanggal_ditemukan' => 'required|date',
            'lokasi_ditemukan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('barang_ditemukan', 'public');
        }
    }

    

}
