@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
      @if($item->image_path)
        <img src="{{ asset('storage/'.$item->image_path) }}" class="img-fluid" alt="">
      @else
        <img src="{{ asset('images/illustration.png') }}" class="img-fluid" alt="">
      @endif
    </div>
    <div class="col-md-6">
      <h3>{{ $item->title }}</h3>
      <p><strong>Tipe:</strong> {{ ucfirst($item->type) }}</p>
      <p><strong>Lokasi:</strong> {{ $item->location }}</p>
      <p><strong>Tanggal:</strong> {{ $item->date_lost }}</p>
      <p><strong>Status:</strong> {{ ucfirst($item->status) }}</p>
      <p>{{ $item->description }}</p>
      <a href="{{ route('lost.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</div>
@endsection
