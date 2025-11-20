@extends('layouts.layout-dashboard')

@section('title', 'Dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Universe')</title>

        {{-- Tailwind --}}
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- Custom CSS --}}
        <style>
            body { box-sizing: border-box; margin: 0; padding: 0; height: 100%; display: flex; flex-direction: column; }
            .main-content { flex: 1; overflow-y: auto; padding-bottom: 80px; }
            .header-fixed { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; }
            .footer-fixed { position: fixed; bottom: 0; left: 0; right: 0; z-index: 1000; }
            .content-wrapper { margin-top: 80px; }
            .status-online { display: inline-block; width: 8px; height: 8px; background: #10b981; border-radius: 50%; margin-left: 6px; }
            .banner-image { width: 100%; height: 300px; object-fit: cover; }
            .item-card { transition: transform 0.2s; }
            .item-card:hover { transform: translateY(-4px); }
        </style>
    </head>

    <body>

        {{-- HEADER --}}
        @include('partials.header')

        {{-- CONTENT --}}
        <div class="main-content content-wrapper">
            @yield('content')
        </div>

        {{-- FOOTER --}}
        @include('partials.footer')

        @yield('scripts')
    </body>
    </html>
@endsection
