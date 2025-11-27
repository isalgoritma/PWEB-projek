@extends('layouts.app')

@section('content')
<style>
    .confirm-section {
        width: 90%;
        margin: 30px auto;
    }

    .confirm-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 20px;
    }

    .confirm-card {
        background: #f6f0e8;
        height: 160px;
        border-radius: 12px;
        padding: 8px;
        position: relative;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .confirm-card .card-footer {
        background: white;
        padding: 8px;
        margin-top: 70px;
        border-radius: 10px;
        font-size: 14px;
    }

    .confirm-card img.status-icon {
        position: absolute;
        bottom: 12px;
        right: 12px;
        width: 28px;
    }

    .confirm-card .category-title {
        font-weight: 700;
    }

    .footer-box {
        background: #f4eee5;
        width: 100%;
        padding: 20px 40px;
        margin-top: 40px;
        border-top: 2px solid #d6c7b3;
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="confirm-section">
    <h3 class="confirm-title">Konfirmasi Kriteria</h3>

    <div class="card-grid">
        @foreach($kriteria as $item)
        <div class="confirm-card">
            <div class="card-footer">
                <div class="category-title">{{ $item->nama }}</div>
                <div style="font-size: 12px;">Selengkapnya...</div>
            </div>
            <img class="status-icon" src="{{ asset('img/check-green.png') }}">
        </div>
        @endforeach
    </div>

    <br><br>

    <h3 class="confirm-title">Konfirmasi Barang</h3>

    <div class="card-grid">
        @foreach($barang as $item)
        <div class="confirm-card">
            <div class="card-footer">
                <div class="category-title">{{ $item->kategori }}</div>
                <div style="font-size: 12px;">Selengkapnya...</div>
            </div>
            <a href="https://wa.me/{{ $item->no_admin }}" target="_blank">
                <img class="status-icon" src="{{ asset('img/wa-green.png') }}">
            </a>
        </div>
        @endforeach
    </div>
</div>

<div class="footer-box">
    <span>Platform untuk mencari dan menemukan barang hilang</span>
    <a href="https://wa.me/{{ $admin->nomor }}">
        <img src="{{ asset('img/wa-green.png') }}" width="30">
        Hubungi Admin
    </a>
</div>

@endsection
