@extends('layouts.auth')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')

<div class="login-bg">

    <div class="login-card">

        {{-- <div class="login-icon-ellipse">
        </div> --}}

        <div class="profile-icon">
            <img src="{{ asset('images/ikon profil.png') }}" class="profile-svg">
        </div>

        <h1 class="login-title" style="font-family: georgia, serif;">UniVerse</h1>

        <form action="{{ route('login.proses') }}" method="POST">
            @csrf

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username Anda" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password Anda" required>

            <a href="#" class="forgot">Lupa Password?</a>

            <button type="submit" class="btn-login">Login</button>

            <div class="login-links">
                Belum punya akun?
                <a href="{{ route('register') }}">Registrasi</a>
            </div>
        </form>

    </div>
</div>


@endsection
