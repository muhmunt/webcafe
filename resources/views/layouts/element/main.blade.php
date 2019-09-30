<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="{{ asset('assets/js/webfont.js') }}"></script>
    <script>
      WebFont.load({
        google: {
          families: [
            "Poppins:300,400,500,600,700",
            "Roboto:300,400,500,600,700"
          ]
        },
        active: function() {
          sessionStorage.fonts = true;
        }
      });
    </script>

    <link rel="stylesheet" href="{{ asset('/assets/metronic/vendors/base/vendors.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/metronic/demo/default/base/style.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/metronic/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/metronic/demo/default/media/img/logo/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/assets/metronic/customize.css') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/logo_compact.png') }}">

    <title>@yield('title')</title>
    @yield('custom-css')
    {{-- <link href="{{ asset('/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/dist/css/all.min.css') }}" rel="stylesheet"> --}}

</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

        @include('layouts.element.navbar')

        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            @include('layouts.element.sidebar')

            @section('content')

            @show

        </div>

        @include('layouts.element.footer')

    </div>

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
      <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->


    {{-- all jquery --}}
    <script src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/metronic/vendors/base/vendors.bundle.js') }}"></script>
    <script src="{{ asset('assets/metronic/demo/default/base/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/metronic/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('assets/metronic/app/js/dashboard.js') }}"></script>


    @yield('scripts')

</body>
</html>

