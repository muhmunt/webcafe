<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>@yield('title')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="{{asset('public/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="{{asset('public/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="{{asset('public/assets/demo/default/media/img/logo/favicon.ico')}}" />
		
		<!--begin::Customize Css -->
		<link href="{{asset('public/assets/customize.css')}}" rel="stylesheet" type="text/css" />

		<!--begin::Page Vendors Styles -->
		<link
		href="{{asset('public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}"
		rel="stylesheet"
		type="text/css"
	  />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		@yield('content')

		<!--begin::Global Theme Bundle -->
		<script src="{{asset('public/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('public/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->
		
		<!--begin::Page Vendors -->
		
		<script
		src="{{asset('public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"
		type="text/javascript"	  
		></script>
		  
		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{asset('public/assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>
		

  
	  <!--begin::Page Scripts -->
	  <script src="{{asset('public/assets/app/js/dashboard.js')}}" type="text/javascript"></script>
  
	  <!--end::Page Scripts -->
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>