<!DOCTYPE html>
<html class="desktop mbr-site-loaded">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web development services in Amethi. Best website design, low-cost website design. School website design, college website design, responsive web design, e-commerce website design, website maintenance services, web design services">
    <meta property="og:title" content="Website design in Amethi">
    <meta property="og:description" content="School website design, college website design, responsive web design, e-commerce website design, website maintenance services, web design services">
    <meta property="og:image" content="{{ asset('assets/image/logo.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Web development services in Amethi. Best website design, low-cost website design">
    <meta name="twitter:image" content="{{ asset('assets/image/logo.png') }}">
    <meta name="geo.region" content="IN-UP">
    <meta name="geo.placename" content="Amethi, Uttar Pradesh, India">
    <meta name="geo.position" content="26.1595;81.8924">
    @yield('title')
    @yield('meta')
    <link rel="stylesheet" href="{{ asset('assets/css/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style(1).css') }}">
    <link rel="preload" as="style" href="{{ asset('assets/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mbr-additional.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/logo.png') }}">
    @yield('style-css')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5TGKQ9LRQ7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-5TGKQ9LRQ7');
    </script>
    @yield('index-script')
    @yield('index-script')
</head>

<body>
    <section id="top-1" style="display: none;">
        <a href="/a3">Best Website Design in amethi</a>
    </section>
    <section data-bs-version="5.1" class="menu menu1 cid-tlVfrwbwzd" once="menu" id="menu01-0">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg navbar-short">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-black display-5" href="/">
                            <img src="{{ asset('assets/image/logo.png') }}" style="width:150px;height:80px;object-fit:contain;">
                        </a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                            <li class="nav-item">
                                <a class="nav-link link text-secondary display-4 fs-4" href="{{ url('/#header04-1') }}"
                                    style="padding: 0px !important;margin-left: 0px !important; font-family:'Times New Roman', Times, serif;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-secondary display-4 fs-4" href="{{ url('/#features04-2') }}"
                                    style="padding: 0px !important;margin-left: 0px !important;font-family:'Times New Roman', Times, serif;">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link  text-secondary display-4 fs-4" href="{{ url('/#features05-3') }}"
                                    style="padding: 0px !important;margin-left: 0px !important;font-family:'Times New Roman', Times, serif;">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-secondary display-4 fs-4" href="{{ url('/#list01-a') }}"
                                    style="padding: 0px !important;margin-left: 0px !important;font-family:'Times New Roman', Times, serif;">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-secondary display-4 fs-4" href="{{ url('/#features06-b') }}"
                                    style="padding: 0px !important;margin-left: 0px !important;font-family:'Times New Roman', Times, serif;">Contacts</a>
                            </li>
                        </ul>
                        <div class="navbar-buttons mbr-section-btn">
                            <a class="btn btn-secondary-outline display-4 fs-4" style="font-family:'Times New Roman', Times, serif;" href="{{ url('join-now') }}">Join Now</a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        @yield('content')
        @include('frontend.layouts.footer')
