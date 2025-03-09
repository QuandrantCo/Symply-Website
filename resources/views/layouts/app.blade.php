<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @stack('css')

    <title>{{ $title ?? config('app.name') }}</title>


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
