<?php

namespace App\Http\Controllers;

use App\Models\BarangHilang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangHilangController extends Controller
{
    public function create()
    {
        return view('barang_hilang.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_kehilangan' => 'required|date',
            'lokasi_kehilangan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $filename = null;

        if ($request->hasFile('foto')) {
            $filename = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads/barang'), $filename);
        }

        BarangHilang::create([
            'user_id' => Auth::id(),
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'tanggal_kehilangan' => $request->tanggal_kehilangan,
            'lokasi_kehilangan' => $request->lokasi_kehilangan,
            'foto' => $filename
        ]);

        return redirect()->back()->with('success', 'Barang berhasil dilaporkan!');
    }
}

