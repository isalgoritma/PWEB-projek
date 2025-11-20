<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Universe - Barang Hilang & Ditemukan')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @stack('styles')

  <style>
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .main-content {
      flex: 1;
      overflow-y: auto;
    }

    .banner-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .item-card {
      transition: transform 0.2s;
    }

    .item-card:hover {
      transform: translateY(-4px);
    }
  </style>
  <style>@view-transition { navigation: auto; }</style>
</head>

<body>
  <!-- Konten Utama -->
  <div class="main-content">
    @yield('content')
  </div>
</body>
</html>
