<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <h1>Job Vacancy</h1>
                    </div>
                </div>
            </div>
        </section>

		
        <!-- <div class="container">
            <div class="row"> -->
                <!-- <div class="col-md-3">
                    <aside class="sidebar">
                        <h4 class="heading-primary">Categories</h4>
                        <ul class="nav nav-list mb-xlg">
                            <li><a href="#">Location</a></li>
                            <li class="active">
                                <a href="#">Education</a>
                                <ul>
                                    <li><a href="#"></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Experience</a></li>
                        </ul>
                    </aside>
                </div> -->
            
        @yield('content')
        </div>
    </div>
    <div class="">
        @include('partial.footer')
    </div>
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