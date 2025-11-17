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
            Register
        </div>

        <!-- REGISTER FORM -->
        <form action="{{ route('register.proses') }}" method="POST">
            @csrf

            <!-- Username -->
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username Anda" required class="mb-3">

            <!-- Password -->
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password Anda" required class="mb-3">

            <!-- Nama -->
            <label>Nama</label>
            <input type="text" name="name" placeholder="Masukkan nama lengkap Anda" required class="mb-3">

            <!-- No HP -->
            <label>No HP</label>
            <input type="text" name="phone_number" placeholder="Masukkan nomor HP Anda" required class="mb-3">

            <!-- Email -->
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email Anda" required class="mb-4">

            <!-- Button -->
            <button type="submit" class="btn-login">Daftar</button>

            <!-- Link to Login -->
            <div class="login-links mt-3">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login</a>
            </div>

        </form>

    </div>
</div>

@endsection
