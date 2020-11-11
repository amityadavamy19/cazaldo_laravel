<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$title ?? ''}}</title>

<meta name="keywords" content="wordpress, codeigniter, laravel, design, development" /> 
<meta name="description" content="Kiara Bright- set up your own e-commerce dropship business with Kiara Bright. An easy way of becoming an entrepreneur" />
        <meta name="google-site-verification" content="google-site-verification=wZkZfgcCMe4hFyF56aYupclv2fi5OYPelRj6katOKyA">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Cazaldo" />
<meta name="MobileOptimized" content="320" />
<link rel="canonical" href="index.html" />
<meta property="og:title" content="Kiara Bright- launch your e-commerece dropship business with Kiara Bright" />
<meta property="og:type" content="website" />
<meta property="og:url" content="index.html" />
<meta property="og:image" itemprop="image" content="assets/images/logo-kb.png" />
<meta property="og:site_name" content="Kiara Bright" />
<meta property="og:description" content="Kiara Bright- set up your own e-commerce dropship business with Kiara Bright. An easy way of becoming an entrepreneur" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Kiara Bright- launch your e-commerece dropship business with Kiara Bright" />
<meta name="twitter:description" content="Kiara Bright- set up your own e-commerce dropship business with Kiara Bright. An easy way of becoming an entrepreneur" />
<meta name="twitter:image" content="assets/images/logo-kb.png" />


<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" type="image/icon" href="{{ asset('assets/images/FAVICON1.png') }}">
<link rel="shortcut icon" href="assets/images/FAVICON.svg">
<link rel="apple-touch-icon-precomposed" href="assets/images/FAVICON.svg">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/FAVICON.svg">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/FAVICON.svg">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/FAVICON.svg">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
<!-- Navigation CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menumaker.css') }}" />
<!-- Animated CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
<!-- Owl Carousel css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
<!-- Line Awesome CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome.min.css') }}" />
<!-- Flaticon CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}" />
<!-- Slicknav CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.min.css') }}" />
<!-- Main Style CSS -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive CSS -->
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        
<!-- all css here -->
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('assets/new/css/nivo-slider.css') }}">
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/new/css/owl.carousel.css') }}">
<!-- font-awesome css -->
<!--<link rel="stylesheet" href="https://kiarabright.in/assets/new/css/font-awesome.min.css">
<!-- animated css -->
<!--<link rel="stylesheet" href="https://kiarabright.in/assets/new/css/animate.css">
<!-- jquery-ui.min css -->
<!--<link rel="stylesheet" href="https://kiarabright.in/assets/new/css/jquery-ui.min.css"> 
<!-- meanmenu css -->
<!--<link rel="stylesheet" href="https://kiarabright.in/assets/new/css/meanmenu.css">-->
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="{{ asset('assets/new/css/jquery.fancybox.css') }} ">
<!-- style css -->
<!--<link rel="stylesheet" href="https://kiarabright.in/assets/new/style.css">
<!-- responsive css -->
<!--<link rel="stylesheet" href="https://kiarabright.in/assets/new/css/responsive.css">
<!-- modernizr js -->
<!--<script src="https://kiarabright.in/assets/new/js/vendor/modernizr-2.8.3.min.js"></script>-->
        
<!-- Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
	<div class="loader"></div>
	
	<x-header title="{{$title}}"/> 
       @include($layout)
        <x-footer />
    </body>
</html>

