<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>@yield('title')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="{{ asset('public/js/webfont.js') }}"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <!--end::Web font -->


		<link href="{{asset('public/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('public/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{asset('public/assets/demo/default/media/img/logo/favicon.ico')}}" />
		<link href="{{asset('public/assets/customize.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css"/>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        @yield('content')

        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/js/tilt.jquery.min.js') }}"></script>


		<script src="{{asset('public/assets/vendors/base/vendors.bundle.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/base/scripts.bundle.js')}}"></script>
		<script src="{{asset('public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<script src="{{asset('public/assets/snippets/custom/pages/user/login.js')}}"></script>
        <script src="{{asset('public/assets/app/js/dashboard.js')}}"></script>

        <script src="{{asset('public/assets/customize.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/autosize.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/select2.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/summernote.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/crud/forms/widgets/bootstrap-daterangepicker.js')}}"></script>
        <script src="{{asset('public/assets/demo/default/custom/components/base/sweetalert2.js')}}"></script>


        @yield('admin-js')

	</body>

	<!-- end::Body -->
</html>
