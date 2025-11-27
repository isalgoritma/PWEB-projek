@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">

    <div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl mx-auto">

        <div class="flex items-center gap-4">
            <div class="w-20 h-20 bg-[#CCA57A] text-white rounded-full flex items-center justify-center text-3xl font-bold">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>

            <div>
                <h2 class="text-2xl font-semibold">{{ $user->name }}</h2>
                <p class="text-gray-600">{{ $user->email }}</p>
            </div>
        </div>

        <div class="mt-8 space-y-3">

            <a href="#" class="block bg-purple-500 text-white p-3 rounded-lg text-center font-medium hover:opacity-90">
                Lihat Profil
            </a>

            <a href="{{ route('lost.create') }}" class="block bg-yellow-800 text-white p-3 rounded-lg text-center font-medium hover:opacity-90">
                 Tambah Barang Hilang
            </a>

            <a href="#" class="block bg-green-600 text-white p-3 rounded-lg text-center font-medium hover:opacity-90">
                Tambah Barang Ditemukan
            </a>

            <a href="#" class="block bg-red-600 text-white p-3 rounded-lg text-center font-medium hover:opacity-90">
                 Hapus Barang
            </a>

            <a href="#" class="block bg-purple-600 text-white p-3 rounded-lg text-center font-medium hover:opacity-90">
                 Konfirmasi Kriteria & Barang
            </a>

        </div>

    </div>
</div>
@endsection
