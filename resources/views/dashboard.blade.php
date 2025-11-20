@extends('layouts.dashboard')
@section('title', 'Dashboard Universe')

@section('content')

    {{-- Banner --}}
    <section class="relative">
        <img id="bannerImage" src="{{ asset('images/banner.svg') }}" class="banner-image">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-2">Selamat Datang, {{ Auth::user()->username }}</h1>
                <p class="text-xl">di Universe - Sistem Barang Hilang &amp; Ditemukan</p>
            </div>
        </div>
    </section>

    {{-- Barang Hilang --}}
    <section id="barang-hilang" class="container mx-auto px-6 py-12" style="background:#f8e9d7;">
        <h2 class="text-3xl font-bold mb-8">Barang Hilang</h2>
        <div id="lostItemsGrid" class="grid grid-cols-1 md:grid-cols-5 gap-6"></div>
    </section>

    {{-- Barang Ditemukan --}}
    <section id="barang-ditemukan" class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-8">Barang Ditemukan</h2>
        <div id="foundItemsGrid" class="grid grid-cols-1 md:grid-cols-5 gap-6"></div>
    </section>

@endsection

@push('scripts')
<script>
    const lostCategories = @json($lostCategories);
    const foundCategories = @json($foundCategories);

    function renderLostItems() {
        const grid = document.getElementById('lostItemsGrid');
        grid.innerHTML = '';

        lostCategories.forEach(cat => {
            grid.innerHTML += `
                <div class="item-card bg-white rounded-lg shadow-md">
                    <img src="${cat.image}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">${cat.category}</h3>
                        <p>${cat.count} barang hilang</p>
                    </div>
                </div>
            `;
        });
    }

    function renderFoundItems() {
        const grid = document.getElementById('foundItemsGrid');
        grid.innerHTML = '';

        foundCategories.forEach(cat => {
            grid.innerHTML += `
                <div class="item-card bg-white rounded-lg shadow-md">
                    <img src="${cat.image}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">${cat.category}</h3>
                        <p>${cat.count} barang ditemukan</p>
                    </div>
                </div>
            `;
        });
    }

    renderLostItems();
    renderFoundItems();
</script>
@endpush
