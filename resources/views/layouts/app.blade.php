<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="google-site-verification" content="DYKkhHTIM57UkXr90JyJa-8l7sP8-x9QIT_aKctojBs" />

    <!-- Meta Tags untuk SEO -->
    <meta name="description"
        content="Symply Haircut Academy - Akademi potong rambut di Yogyakarta. Pelajari keterampilan barbershop terbaik dengan pelatihan profesional di Yogyakarta. Daftar sekarang di Symply Haircut Academy!">
    <meta name="keywords"
        content="academy barbershop, akademi potong rambut jogja, pelatihan potong rambut, barbershop jogja, kursus barbershop, belajar potong rambut jogja, akademi rambut, kursus barbershop Yogyakarta">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="ID-YO">
    <meta name="geo.placename" content="Kasihan, Bantul, Yogyakarta">
    <meta name="geo.position" content="-7.828529;110.328947">
    <meta name="ICBM" content="-7.828529, 110.328947">

    <!-- Open Graph Tags untuk Media Sosial -->
    <meta property="og:title" content="Symply Haircut Academy - Akademi Barbershop di Yogyakarta">
    <meta property="og:description"
        content="Pelatihan profesional untuk barbershop di Yogyakarta. Ikuti Symply Haircut Academy dan tingkatkan keterampilan potong rambutmu. Daftar sekarang di Yogyakarta!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/academy') }}">
    <meta property="og:image" content="{{ asset('storage/images/service/favicon.ico') }}">
    <meta property="og:site_name" content="Symply Haircut Academy">
    <meta property="og:locale" content="id_ID">
    <meta name="twitter:image" content="{{ asset('storage/images/service/favicon.ico') }}">
    <meta property="og:image" content="{{ asset('storage/images/service/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="shortcut icon" href="{{ asset('storage/images/service/favicon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/service/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/images/service/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/images/service/favicon.ico') }}">

    @stack('css')

    <title>{{ $title ?? 'Symply Haircut - Barbershop Pria & Akademi di Yogyakarta' }}</title>



    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #333333;
            --primary-color: #6200ee;
        }

        .dark-mode {
            --bg-color: #121212;
            --text-color: #f5f5f5;
            --primary-color: #bb86fc;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: Arial, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <x-navbar />
    <main>
        @yield('content')
    </main>
    <x-footer />
    @stack('js')
    <script src="{{ asset('js/navbar.js') }}"></script>

</body>

</html>
