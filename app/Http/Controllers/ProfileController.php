<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        // halaman awal profil (ada tombol 'lihat profil')
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function show()
    {
        // halaman lanjutan (tampilan seperti gambar)
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'field' => 'required|in:username,email,nohp',
            'value' => 'required'
        ]);

        $user = Auth::user();

        $user->{$request->field} = $request->value;
        $user->save();

        return back()->with('success', 'Data berhasil diperbarui');
    }


    public function konfirmasiPage()
    {
        $kriteria = []; // sementara, biar tidak error
        $barang = [];
        $admin = (object) ['nomor' => '628123456789'];

        return view('profile.konfirmasi', compact('kriteria', 'barang', 'admin'));
    }
}
