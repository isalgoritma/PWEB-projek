@extends('layouts.app')
@section('content')
<div class="container py-5">
  <h3>Tambah Barang Hilang / Ditemukan</h3>
  <form action="{{ route('lost.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Judul</label>
      <input name="title" value="{{ old('title') }}" class="form-control" required>
      @error('title') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Tipe</label>
      <select name="type" class="form-select">
        <option value="lost" {{ old('type')=='lost' ? 'selected' : '' }}>Lost</option>
        <option value="found" {{ old('type')=='found' ? 'selected' : '' }}>Found</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Lokasi</label>
      <input name="location" value="{{ old('location') }}" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal</label>
      <input type="date" name="date_lost" value="{{ old('date_lost') }}" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Upload Gambar</label>
      <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('lost.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection
