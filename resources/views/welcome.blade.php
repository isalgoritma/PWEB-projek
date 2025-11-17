@extends('layouts.app')

@section('content')
<div class="container-fluid landing vh-100 d-flex align-items-center">
  <div class="row w-100">
    <div class="col-md-6 landing-left d-flex flex-column justify-content-center">
      <h1 class="display-4 fw-bold">Selamat Datang<br>di UniVerse</h1>
      <p class="lead">Kamu kehilangan sesuatu? Kamu menemukan sesuatu? Konfirmasi di sini yaa!</p>

      <!-- FIXED BUTTON -->
      <a href="{{ route('login') }}" class="btn custom-btn mt-3">Get Started</a>
    </div>

    <div class="col-md-6 text-center">
      <img src="{{ asset('images/illustration.png') }}" alt="illustration" class="circle-img img-fluid">
    </div>
  </div>
</div>
@endsection
