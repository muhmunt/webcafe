<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/waves.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/progressjs.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/lightbox.min.css')}}">
</head>
<body style="background: #fffff;color:black">
    <div id="app">
        @include('layouts.header.index')

        <main class="">
            @yield('content')
        </main>
    </div>

        @include('layouts.footer.index')
</body>
<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/aos.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/js/waves.min.js') }}"></script>
<script src="{{ asset('public/js/progress.js') }}"></script>
<script src="{{ asset('public/js/lightbox.min.js') }}"></script>
@yield('scripts')
<script>

    AOS.init();
    Waves.attach('.btn');
    Waves.init();
</script>

</html>
