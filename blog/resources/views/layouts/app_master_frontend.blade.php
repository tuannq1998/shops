<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hasaki | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.ico')}}">

    <!-- Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <!-- CSS  -->

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">

    <!-- owl.theme CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">

    <!-- owl.transitions CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.transitions.css')}}">

    <!-- font-awesome.min CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

    <!-- font-icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/fonts/font-icon.css')}}">

    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">

    <!-- mobile menu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">

    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/custom-slider/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/custom-slider/css/preview.css')}}" type="text/css" media="screen" />

    <!-- animate CSS
   ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

    <!-- normalize CSS
   ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">

    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="home-one">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
@include('frontend.components.header')
@yield('content')
@include('frontend.components.footer')

<!-- JS -->

<!-- jquery-1.11.3.min js
============================================ -->
<script src="{{asset('frontend/js/vendor/jquery-1.11.3.min.js')}}"></script>

<!-- bootstrap js
============================================ -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- Nivo slider js
============================================ -->
<script src="{{asset('frontend/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/custom-slider/home.js')}}" type="text/javascript"></script>

<!-- owl.carousel.min js
============================================ -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<!-- jquery scrollUp js
============================================ -->
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>

<!-- price-slider js
============================================ -->
<script src="{{asset('frontend/js/price-slider.js')}}"></script>

<!-- elevateZoom js
============================================ -->
<script src="{{asset('frontend/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

<!-- jquery.bxslider.min.js
============================================ -->
<script src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>

<!-- mobile menu js
============================================ -->
<script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>

<!-- wow js
============================================ -->
<script src="{{asset('frontend/js/wow.js')}}"></script>

<!-- plugins js
============================================ -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>

<!-- main js
============================================ -->
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
