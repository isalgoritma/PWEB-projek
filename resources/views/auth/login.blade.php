@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')

<div class="login-bg">

    <div class="login-card">

        <!-- Icon -->
        <div class="login-icon">
            <i class="bi bi-person-fill"></i>
        </div>

        <!-- Title -->
        <div class="login-title">
            Sistem Manajemen Informasi Laporan Barang Hilang
        </div>

        <!-- Form Login -->
        <form action="{{ route('login.proses') }}" method="POST">
            @csrf

            <!-- Username -->
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username Anda" required class="mb-3">

            <!-- Password -->
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password Anda" required class="mb-2">

            <div class="text-end mb-2">
                <a href="#" style="font-size: 13px;">Lupa Password?</a>
            </div>

            <button type="submit" class="btn-login">Login</button>

            <div class="login-links mt-3">
                Belum punya akun?
                <a href="{{ route('register') }}">Registrasi</a>
            </div>

        </form>

    </div>
</div>

@endsection
