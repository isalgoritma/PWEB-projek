@extends('layouts.app')

@section('content')
<div class="container-fluid landing vh-100 d-flex align-items-center">
  <div class="row w-100 align-items-center">

    <!-- KIRI -->
    <div class="col-md-6 landing-left d-flex flex-column justify-content-center">

      <h1 class="fw-bold" style="font-size: 7rem; line-height: 1.2;">
          Selamat Datang<br>di UniVerse
      </h1>

      <p class="lead" style="font-size: 3rem;">
          Kamu kehilangan sesuatu? Kamu menemukan sesuatu? Konfirmasi di sini yaa!
      </p>

      <a href="{{ route('login') }}" class="btn custom-btn mt-6">Get Started</a>
    </div>

    <!-- KANAN : GAMBAR -->
    <div class="col-md-6 text-center d-flex justify-content-center">

        <img
            src="{{ asset('images/landing-photo.png') }}"
            alt="Landing Image"
            class="img-fluid"
            style="max-width: 1000px; width: 100%; object-fit: contain;"
            onerror="this.src='{{ asset('images/fallback.png') }}';"
        >

    </div>

  </div>
</div>
@endsection
