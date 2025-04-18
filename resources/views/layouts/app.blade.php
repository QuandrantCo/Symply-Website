<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="shortcut icon" href="{{ asset('storage/images/service/logo-symply.svg') }}">

    @stack('css')

    <title>{{ $title ?? config('app.name') }}</title>

    <style>
        html {
            scroll-behavior: smooth;
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
