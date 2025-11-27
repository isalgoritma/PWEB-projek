@extends('layouts.app')

@section('content')

<style>
    .section-wrapper {
        width: 90%;
        margin: 30px auto;
    }

    .section-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #333;
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        margin-bottom: 40px;
    }

    .item-card {
        background: #f0e9df;
        width: 100%;
        height: 160px;
        border-radius: 15px;
        position: relative;
        padding: 10px;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    }

    .item-footer {
        background: white;
        position: absolute;
        bottom: 10px;
        left: 10px;
        right: 10px;
        padding: 8px;
        border-radius: 10px;
        font-size: 14px;
    }

    .item-name {
        font-weight: 700;
        margin-bottom: 2px;
    }

    .item-icon {
        position: absolute;
        bottom: 18px;
        right: 18px;
        width: 28px;
    }

    .footer-box {
        background: #f0e9df;
        padding: 20px 40px;
        margin-top: 40px;
        border-top: 2px solid #d3c5b6;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-box img {
        width: 28px;
        margin-left: 10px;
    }
</style>


<div class="section-wrapper">

    <h3 class="section-title">Konfirmasi Kriteria</h3>

    <div class="card-grid">
        @foreach($kriteria as $item)
        <div class="item-card">
            <div class="item-footer">
                <div class="item-name">{{ $item['nama'] }}</div>
                <div style="font-size: 12px;">Selengkapnya...</div>
            </div>
            <img src="{{ asset('img/check.png') }}" class="item-icon">
        </div>
        @endforeach
    </div>

    <h3 class="section-title">Konfirmasi Barang</h3>

    <div class="card-grid">
        @foreach($barang as $item)
        <div class="item-card">
            <div class="item-footer">
                <div class="item-name">{{ $item['nama'] }}</div>
                <div style="font-size: 12px;">Selengkapnya...</div>
            </div>
            <a href="https://wa.me/{{ $admin['nomor'] }}" target="_blank">
                <img src="{{ asset('img/wa.png') }}" class="item-icon">
            </a>
        </div>
        @endforeach
    </div>

</div>

<div class="footer-box">
    <span>Platform untuk mencari dan menemukan barang hilang</span>

    <a href="https://wa.me/{{ $admin['nomor'] }}" style="display:flex;align-items:center;">
        Hubungi Admin <img src="{{ asset('img/wa.png') }}">
    </a>
</div>

@endsection
