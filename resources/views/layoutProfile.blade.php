<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Pralon Career</title>



	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{  asset('template/img/favicon.ico') }}" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{  asset('template/img/apple-touch-icon.png') }}">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{  asset('template/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{  asset('template/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
	<link rel="stylesheet" href="{{  asset('template/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{  asset('template/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{  asset('template/vendor/magnific-popup/magnific-popup.min.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{  asset('template/css/theme.css') }}">
	<link rel="stylesheet" href="{{  asset('template/css/theme-elements.css') }}">
	<link rel="stylesheet" href="{{  asset('template/css/theme-blog.css') }}">
	<link rel="stylesheet" href="{{  asset('template/css/theme-shop.css') }}">
	<link rel="stylesheet" href="{{  asset('template/css/theme-animate.css') }}">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="{{  asset('template/vendor/rs-plugin/css/settings.css') }}" media="screen">
	<link rel="stylesheet" href="{{  asset('template/vendor/rs-plugin/css/layers.css') }}" media="screen">
	<link rel="stylesheet" href="{{  asset('template/vendor/rs-plugin/css/navigation.css') }}" media="screen">
	<link rel="stylesheet" href="{{  asset('template/vendor/circle-flip-slideshow/css/component.css') }}" media="screen">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{  asset('template/css/skins/default.css') }}">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{  asset('template/css/custom.css') }}">

	<!-- Head Libs -->
	<script src="{{  asset('template/vendor/modernizr/modernizr.min.js') }}"></script>

	<!-- Admin Extension Specific Page Vendor CSS -->
	<link rel="stylesheet" href="{{  asset('template/admin/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />

	<!-- Admin Extension CSS -->
	<link rel="stylesheet" href="{{  asset('template/admin/assets/stylesheets/theme-admin-extension.css') }}">

	<!-- Admin Extension Skin CSS -->
	<link rel="stylesheet" href="{{  asset('template/admin/assets/stylesheets/skins/extension.css') }}">

	<!-- GT Career Form CSS -->
	<link rel="stylesheet" href="{{  asset('template/css/gt-career-form.css') }}">
	
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


	

	




</head>
<body>
    <div class="">
        @include('partial.navbar')
    </div>

    <div class="">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{ $pageTitle }}</h1>
                    </div>
                    <div class="col-md-4" style="text-align: right;">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger logout-button">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

		
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-3">
				<aside class="sidebar page-header-custom">
					<a class="active" href="{{ route('profile') }}" style="text-decoration:none;color:#333">
						<div class="my-profile">									
							<img width="50px" height="50px" style="margin-top:10px;margin-left:10px" src="{{ asset('storage/' . $data->photo) }}">
							<span class="profile-name" style="font-weight:bold">{{ $data->full_name }}</span>
							<div style="margin:-25px 0 10px 85px;font-size:13px">View my profile</div>									
						</div>
					</a>
					<ul class="nav nav-list mb-xlg">
						<li class="{{ Request::is('experience') ? 'active' : '' }}"><a href="{{ route('experience') }}">Experience</a></li>
						<li class="{{ Request::is('education') ? 'active' : '' }}"><a href="{{ route('education') }}">Education</a></li>
						<li class="{{ Request::is('skills') ? 'active' : '' }}"><a href="{{ route('skill') }}">Skills</a></li>
						<li class="{{ Request::is('trach') ? 'active' : '' }}"><a href="{{ route('trach') }}">Training &amp; Achievements</a></li>
						<li class="{{ Request::is('aboutme') ? 'active' : '' }}"><a href="{{ route('aboutme') }}">About Me</a></li>
						<li class="{{ Request::is('family') ? 'active' : '' }}"><a href="{{ route('family') }}">Family</a></li>
						<li class="{{ Request::is('application-status') ? 'active' : '' }}"><a href="{{ route('application-status') }}">Application Status</a></li>
					</ul>

		
				</aside>
			</div>
        @yield('content')
    </div>
    <div class="">
        @include('partial.footer')
    </div>
	@stack('js')
</body>

<!-- Vendor -->
<script src="{{  asset('template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
<script src="{{  asset('template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{  asset('template/vendor/common/common.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery.validation/jquery.validation.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery.stellar/jquery.stellar.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{  asset('template/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{  asset('template/vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{  asset('template/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{  asset('template/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{  asset('template/vendor/vide/vide.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{  asset('template/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{  asset('template/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{  asset('template/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{  asset('template/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
<script src="{{  asset('template/js/views/view.home.js') }}"></script>

<!-- Theme Custom -->
<script src="{{  asset('template/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{  asset('template/js/theme.init.js') }}"></script>

<!-- Admin Extension Specific Page Vendor -->
<script src="{{ asset('template/admin/assets/vendor/autosize/autosize.js') }}"></script>
<script src="{{ asset('template/admin/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>

<!-- Admin Extension -->
<script src="{{ asset('template/admin/assets/javascripts/theme.admin.extension.js') }}"></script>


</html>