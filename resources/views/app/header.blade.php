<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adai Circle - Home</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicons -->
        <link href="{{ asset('img/logo.png') }}" rel="icon">
        <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/main.js') }}"></script>
    </head>
    <body class="antialiased">
       <div id="app">
       <header id="header" class="fixed-top" style="background-color: #fff !important;">
        <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="/"><img src="{{ asset('img/adaipng.png') }}" width="100" height="100%" alt="" srcset=""></a></h1>
        <nav class="nav-menu d-none d-lg-block" style="text-transform: capitalize !important;">
            <ul>
                <li class="active"><a class="nav-link-d" href="/">Home</a></li>
                <li><a class="nav-link-d" href="/#services" >Services</a></li>
                <li><a class="nav-link-d" href="/about-us">About Us</a></li>
                <li><a class="nav-link-d" href="/about-us/#team">Team</a></li>
                <!-- <li><a href="/testimonials">Testimonials</a></li> -->
                <li><a class="nav-link-d" href="/contact-us">Contact Us</a></li>
                <li><a class="nav-link-d" href="/blog">Blog</a></li>
            </ul>
        </nav>
        <div class="header-social-links">
            <a href="https://wwww.twitter.com/adai_circle" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="https://wwww.facebook.com/adaicircle" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://wwww.instagram.com/AdaiCircle" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="https://wwww.linkedin.com/adaicircle" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
        </div>
        </header>