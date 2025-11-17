@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Dashboard</h2>
    <p class="mb-4">Beberapa item terbaru:</p>
    <div class="row">
        @foreach($latest as $it)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if($it->image_path)
                <img src="{{ asset('storage/'.$it->image_path) }}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $it->title }}</h5>
                    <p class="card-text">{{ Str::limit($it->description, 80) }}</p>
                    <a href="{{ route('lost.show', $it->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
