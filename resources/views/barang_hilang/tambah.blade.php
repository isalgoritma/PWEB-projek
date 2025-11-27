@extends('layouts.app')

@section('content')
<style>
    .form-container {
        width: 90%;
        margin: auto;
        background: #fff;
        padding: 25px;
        border-radius: 15px;
    }
    .foto-box {
        width: 220px;
        height: 220px;
        border: 2px dashed #ccc;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        background: #fafafa;
    }
    .input-style {
        width: 100%;
        border-radius: 15px;
        padding: 12px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        background: #F3EDE8;
    }
    .btn-submit {
        background: #8B6E62;
        color: white;
        padding: 12px 20px;
        border-radius: 15px;
        border: none;
        cursor: pointer;
    }
</style>

<div class="form-container">
    <h2><b>Form Tambah Barang Hilang</b></h2>
    <p>Laporkan barang yang hilang dengan mengisi form di bawah ini</p>

    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="display:flex; gap:50px; margin-top:20px;">
            {{-- FOTO BARANG --}}
            <div>
                <label><b>Foto Barang</b></label>
                <div class="foto-box" id="preview-box">
                    <span>Foto akan muncul di sini</span>
                </div>

                <input type="file" name="foto" id="foto" accept="image/*" class="input-style">
            </div>

            {{-- DETAIL BARANG --}}
            <div style="flex:1;">
                <label><b>Nama Barang</b></label>
                <input type="text" name="nama_barang" class="input-style">

                <label><b>Deskripsi</b></label>
                <textarea name="deskripsi" class="input-style" rows="3"></textarea>

                <label><b>Tanggal Kehilangan</b></label>
                <input type="date" name="tanggal_hilang" class="input-style">

                <label><b>Lokasi Kehilangan</b></label>
                <input type="text" name="lokasi_hilang" class="input-style">

                <button class="btn-submit">Laporkan Barang Hilang</button>
            </div>
        </div>
    </form>
</div>

<script>
    // Preview Foto
    document.getElementById('foto').addEventListener('change', function(e){
        const file = e.target.files[0];
        const previewBox = document.getElementById('preview-box');

        if (file) {
            previewBox.innerHTML = `<img src="${URL.createObjectURL(file)}" style="width:100%; height:100%; border-radius:15px; object-fit:cover;">`;
        }
    });
</script>



@endsection
