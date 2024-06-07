<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Priscor Academy - The best Software Development Academy  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/logo/logo.png') }}">
    <!-- CSS
	============================================ o816 230 3341 -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/magnifypopup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/animation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/jqueru-ui-min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/tipped.min.css') }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/app.css') }}">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <!-- <div id="edublink-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
        </div>
    </div> -->

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start          =-->
        <!--=====================================-->
        <header class="edu-header header-style-1 header-fullwidth no-topbar">
            <div id="edu-sticky-placeholder"></div>
            <div class="header-mainmenu">
                <div class="container-fluid">
                    <div class="header-navbar">
                        <div class="header-brand">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img style="width: 150px; height: 100px;" class="logo-light" src="{{ asset('front/assets/images/logo/logo.png') }}" alt="Corporate Logo">
                                    <img style="width: 150px; height: 100px;" class="logo-dark" src="{{ asset('front/assets/images/logo/logo.png') }}" alt="Corporate Logo">
                                </a>
                            </div>
                            <div class="header-category">
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class="has-droupdown">
                                            <!-- <a href="#"><i class="icon-1"></i>Category</a> -->
                                            <!-- <ul class="submenu">
                                                <li><a href="course-one.html">Design</a></li>
                                                <li><a href="course-one.html">Development</a></li>
                                                <li><a href="course-one.html">Architecture</a></li>
                                                <li><a href="course-one.html">Life Style</a></li>
                                                <li><a href="course-one.html">Data Science</a></li>
                                                <li><a href="course-one.html">Marketing</a></li>
                                                <li><a href="course-one.html">Music</a></li>
                                                <li><a href="course-one.html">Photography</a></li>
                                                <li><a href="course-one.html">Finance</a></li>
                                                <li><a href="course-one.html">Motivation</a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-mainnav">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('about') }}">About Us</a></li>

                                   
                                    <!-- <li><a href="{{ url('services') }}">Services</a></li> -->
                                    
                                    <li><a href="{{ url('courses') }}">Courses</a></li>
                                   
                                    
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                  
                                    
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="header-action">
                                
                           
                               
                                <li class="mobile-menu-bar d-block d-xl-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-mobile-menu">
                <div class="inner">
                    <div class="header-top">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img style="width: 80px; height: 100px;" class="logo-light" src="{{ asset('front/assets/images/logo/logo.png') }}" alt="Corporate Logo">
                                <img style="width: 80px; height: 100px;" class="logo-dark" src="{{ asset('front/assets/images/logo/logo.png') }}" alt="Corporate Logo">
                            </a>
                        </div>
                        <div class="close-menu">
                            <button class="close-button">
                                <i class="icon-73"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="mainmenu">
                    
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">About Us</a></li>

                    
                    <!-- <li><a href="{{ url('services') }}">Services</a></li> -->
                    
                    <li><a href="{{ url('courses') }}">Courses</a></li>
                    
                    
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                  
                                  
                </ul>
                </div>
            </div>
            <!-- Start Search Popup  -->
            <div class="edu-search-popup">
                <div class="content-wrap">
                    <div class="site-logo">
                        <img style="width: 150px; height: 100px;" class="logo-light" src="{{ asset('front/assets/images/logo/logo.png') }}" alt="Corporate Logo">
                        <img style="width: 150px; height: 100px;" class="logo-dark" src="{{ asset('front/assets/images/logo/logo.png') }}" alt="Corporate Logo">
                    </div>
                    <div class="close-button">
                        <button class="close-trigger"><i class="icon-73"></i></button>
                    </div>
                    <div class="inner">
                        <form class="search-form" action="#">
                            <input type="text" class="edublink-search-popup-field" placeholder="Search Here...">
                            <button class="submit-button"><i class="icon-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Search Popup  -->
        </header>