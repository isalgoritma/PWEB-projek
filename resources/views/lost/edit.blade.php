@extends('layouts.app')
@section('content')
<div class="container py-5">
  <h3>Edit Barang</h3>
  <form action="{{ route('lost.update', $item->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
      <label class="form-label">Judul</label>
      <input name="title" value="{{ old('title', $item->title) }}" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Tipe</label>
      <select name="type" class="form-select">
        <option value="lost" {{ old('type', $item->type)=='lost' ? 'selected' : '' }}>Lost</option>
        <option value="found" {{ old('type', $item->type)=='found' ? 'selected' : '' }}>Found</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <textarea name="description" class="form-control">{{ old('description', $item->description) }}</textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Lokasi</label>
      <input name="location" value="{{ old('location', $item->location) }}" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal</label>
      <input type="date" name="date_lost" value="{{ old('date_lost', $item->date_lost) }}" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Status</label>
      <select name="status" class="form-select">
        <option value="open" {{ $item->status=='open' ? 'selected' : '' }}>Open</option>
        <option value="matched" {{ $item->status=='matched' ? 'selected' : '' }}>Matched</option>
        <option value="closed" {{ $item->status=='closed' ? 'selected' : '' }}>Closed</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Upload Gambar (Opsional)</label>
      <input type="file" name="image" class="form-control">
      @if($item->image_path)
        <img src="{{ asset('storage/'.$item->image_path) }}" alt="" class="img-thumbnail mt-2" style="max-width:150px;">
      @endif
    </div>

    <button class="btn btn-primary">Perbarui</button>
    <a href="{{ route('lost.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection
