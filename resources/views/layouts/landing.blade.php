<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Uncle Jo Coffe Shop</title>
    <!-- Favicon -->
    <link href="{{asset('public/img/UNCLE-JO/logo1.png')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    @yield('custom-css')
    <!-- Icons -->
    <link href="{{asset('public/argon/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('public/argon/assets/vendor/font-awesome/css/font-awesome.min.css')}}"    rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('public/argon/assets/css/argon.css?v=1.1.0')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/swiper.min.css')}}">
</head>

<body>

    {{-- @include('layouts.landing.header') --}}

    <main>
        @yield('content')
    </main>

    {{-- @include('layouts.landing.footer') --}}
      <!-- Core -->
    <script src="{{asset('public/argon/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/argon/assets/vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('public/argon/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/argon/assets/vendor/headroom/headroom.min.js')}}"></script>
    <script src="{{ asset('public/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('public/vendor/jsvalidation/js/jsvalidation.min.js') }}"></script>
    <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/js/waves.min.js') }}"></script>
    <script src="{{ asset('public/js/swiper.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{asset('public/argon/assets/js/argon.js?v=1.1.0')}}"></script>
    @yield('scripts')
</body>

</html>
