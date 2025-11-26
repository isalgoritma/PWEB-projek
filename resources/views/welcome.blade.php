<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniVerse</title>
</head>

<style>
    /* Background sesuai Figma */
    .universe-landing {
        background-color: #f7efe3;   /* krem */
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    /* Logo */
    .universe-logo {
        width: 200px;
        margin-bottom: 0.01px;

        animation:
            blink-in 1.2s ease-in-out,
            slide-up 0.8s ease-out 1.2s;
    }

    @keyframes blink-in {
        0% { opacity: 0; }
        25% { opacity: 1; }
        40% { opacity: 0.5; }
        55% { opacity: 1; }
        100% { opacity: 1; }
    }

    @keyframes slide-up {
        0% { transform: translateY(40px); }
        100% { transform: translateY(0); }
    }

    /* Judul "UniVerse" warna coklat Figma */
    .universe-title {
        font-family: 'Georgia', serif;
        font-size: 3rem;
        color: #735353;   /* coklat tua Figma */
        margin-bottom: 5px;
        font-weight: bold;
    }

    /* Subtext */
    .universe-subtext {
        font-size: 1.2rem;
        margin-bottom: 35px;
        color: #735353; /* sama brown */
    }

    /* Tombol outline */
    .universe-btn {
        padding: 5px 30px;
        font-size: 1.3rem;
        border-radius: 45px;
        border: 2px solid #735353;  /* outline coklat */
        background-color: transparent;
        color: #735353;
        text-decoration: none;
        transition: .2s;
    }

    .universe-btn:hover {
        background-color: #735353;
        color: #fff;
    }
</style>

<body>

<div class="universe-landing">

    <div>
        {{-- LOGO --}}
        <img src="{{ asset('landing-photo-logo.png') }}"
             class="universe-logo">

        {{-- TITLE --}}
        <h1 class="universe-title">UniVerse</h1>

        {{-- SUBTEXT --}}
        <p class="universe-subtext">
            Kamu kehilangan sesuatu? Kamu menemukan sesuatu?<br>
            Konfirmasi di sini yaa!
        </p>

        {{-- BUTTON --}}
        <a href="{{ route('login') }}" class="universe-btn">Mulai</a>
    </div>

</div>

</body>
</html>
