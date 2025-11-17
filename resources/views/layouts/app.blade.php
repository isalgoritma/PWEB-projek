<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','UniVerse')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons (untuk login icon) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    @stack('styles')
</head>
<body>

{{-- Navbar hanya tampil jika bukan halaman login/register --}}
@if (!request()->is('login') && !request()->is('register'))
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="{{ route('welcome') }}">UniVerse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link text-white">Home</a></li>
        <li class="nav-item"><a href="{{ route('lost.index') }}" class="nav-link text-white">Daftar Barang</a></li>
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
@endif

@yield('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/landing.js') }}"></script>
@stack('scripts')
</body>
</html>
