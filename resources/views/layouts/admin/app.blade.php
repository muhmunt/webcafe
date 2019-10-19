<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="{{ asset('public/js/webfont.js') }}"></script>
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

    <link rel="stylesheet" href="{{ asset('/public/assets/vendors/base/vendors.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/demo/default/base/style.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/demo/default/media/img/logo/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/customize.css') }}">

    {{-- ARGON --}}
    {{-- <link type="text/css" href="{{asset('public/argon/assets/css/argon.css?v=1.1.0')}}" rel="stylesheet"> --}}


    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/public/images/logo_compact.png') }}">

    <title>@yield('title')</title>
    @yield('custom-css')
    {{-- <link href="{{ asset('/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/dist/css/all.min.css') }}" rel="stylesheet"> --}}

</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->

        @include('layouts.element.navbar')

            @include('layouts.element.sidebar')

            @section('content')

            @show

        @include('layouts.element.footer')


    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
      <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->


    {{-- all jquery --}}
    <script src="{{ asset('public/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/base/vendors.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/demo/default/base/scripts.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/app/js/dashboard.js') }}"></script>

    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

    <script src="{{asset('public/assets/customize.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/autosize.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/select2.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/summernote.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-daterangepicker.js')}}"></script>
    <script src="{{asset('public/assets/demo/default/custom/components/base/sweetalert2.js')}}"></script>

    {{-- ARGON --}}
    {{-- <script src="{{asset('public/argon/assets/js/argon.js?v=1.1.0')}}"></script> --}}


    @yield('admin-js')

</body>
</html>


