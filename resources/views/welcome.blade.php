<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}"/>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet"/>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css')}}"/>
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick-theme.css')}}"/>
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}"/>
    <title>Glamyo Healthcare</title>
</head>
<body>
    <header>
        <div class="banner--wrap">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nav menu -->
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.html"><img src="{{asset('assets/frontend/images/logo.png')}}" width="150" alt="#" /></a>
                                <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle
                                        navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"> Health <i class="fas fa-plus"></i> </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">X</a>
                                                <a class="dropdown-item" href="#">Y</a>
                                                <a class="dropdown-item" href="#">Z </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"> Beauty <i class="fas fa-plus"></i> </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">X</a>
                                                <a class="dropdown-item" href="#">Y</a>
                                                <a class="dropdown-item" href="#">Z </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"> Care <i class="fas fa-plus"></i> </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">X</a>
                                                <a class="dropdown-item" href="#">Y</a>
                                                <a class="dropdown-item" href="#">Z </a>
                                            </div>
                                        </li>
                                        <!-- Sub Menu -->
                                        <li class="nav-item dropdown" style="display: none;">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                About <i class="fas fa-plus"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" href="#">Services <i class="fas fa-plus"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu1">
                                                        <li><a class="dropdown-item" href="#">Services
                                                                One</a></li>
                                                        <li><a class="dropdown-item" href="#">Services
                                                                Two</a></li>
                                                        <li><a class="dropdown-item" href="#">Services
                                                                Three</a></li>
                                                                <li><a class="dropdown-item" href="#">Service
                                                                    Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Appointment</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" href="#">Our Doctors <i class="fas fa-plus"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu1">
                                                        <li><a class="dropdown-item" href="#">Doctors One</a></li>
                                                        <li><a class="dropdown-item" href="#">Doctors Two</a></li>
                                                        <li><a class="dropdown-item" href="#">Doctors Three</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Pricing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="cart-seperate">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><img src="{{asset('assets/frontend/images/location.png')}}"></a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-outline-primary appointment-btn-top" href="callto:9711144230">+91 97111 44 230</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!--//End Nav menu -->
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="banner-slider">
                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <!-- Slider Title -->
                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        Healthcare, Simplified.
                                    </h1>
                                    <p>
                                        Glamyo is a multi-specialty healthcare provider delivering a hassle-free experience for all elective surgeries & cosmetic procedures with personalized care.
                                    </p>
                                    <a href="#" class="btn btn-primary">Book Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                        class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>
                                <!--//End Slider Title -->
                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                            fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                            fill="#4D72D0" />
                                    </svg>

                                    <img src="{{asset('assets/frontend/images/doctors.png')}}" class="img-fluid animated-hero" alt="hero" />

                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <!-- Slider Title -->
                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        What Makes Us Better, Makes You Better.
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        ipsum dolor sit amet.
                                    </p>
                                    <a href="#" class="btn btn-primary">Make Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                        class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>
                                <!--//End Slider Title -->
                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                            fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                            fill="#4D72D0" />
                                    </svg>

                                    <img src="{{asset('assets/frontend/images/doctors2.png')}}" class="img-fluid animated-hero" alt="hero" />

                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <!-- Slider Title -->
                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        What Makes Us Better, Makes You Better.
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        ipsum dolor sit amet.
                                    </p>
                                    <a href="#" class="btn btn-primary">Make Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                        class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>
                                <!--//End Slider Title -->
                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                            fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                            fill="#4D72D0" />
                                    </svg>

                                    <img src="{{asset('assets/frontend/images/doctors.png')}}" class="img-fluid animated-hero" alt="hero" />

                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--//End Header -->
    <!--==================== About Section ====================-->
    <section class="about-section">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <!-- booking form -->
                    <ul class="booking-form">
                        <li><input type="text" class="form-control" placeholder="Enter Your Name" /><i
                                class="fas fa-user"></i></li>
                        <li><input type="text" class="form-control" placeholder="Select Your Location" /><i
                                class="fas fa-map-marker-alt"></i></li>
                        <li>
                            <select class="custom-select form-control">
                                <option selected>Select a Service</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </li>
                        <li class="form-btn">
                            <a href="#" class="btn btn-success">BOOK NOW</a>
                        </li>
                    </ul>
                    <!--//End booking form -->
                </div>
            </div>
            <div class="row space">
                <!-- Service Icon -->
                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="{{asset('assets/frontend/images/service-thumbnail01.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Specialised Service</h4>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                </div>
                <!-- Service Icon 02 -->
                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="{{asset('assets/frontend/images/service-thumbnail02.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>24/7 Advanced Care</h4>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                </div>
                <!-- Service Icon 03 -->
                <div class="col-md-4">
                    <div class="service-thumbnail border-0 d-flex flex-fill">
                        <img src="{{asset('assets/frontend/images/service-thumbnail03.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Get Result Online</h4>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                </div>
                <!--//End Service Icon -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- About -->
                    <div class="about-video_block">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                    class="video-play-img popup-youtube">
                                    <img src="{{asset('assets/frontend/images/about-img.png')}}" class="img-fluid w-100" alt="#" />
                                    <div class="video-play-btn">
                                        <div class="video-play-icon">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <span>PLAY VIDEO</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="video-play-text">
                                    <h2>About Glamyo Health</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation.
                                    </p>
                                    <p>
                                        Sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostru
                                        <a href="#">Readmore</a>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="facilities blue">
                                                <h3>9540+</h3>
                                                <span>Happy Patients</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facilities green">
                                                <h3>215+</h3>
                                                <span>Expert Doctors</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="facilities yellow">
                                                <h3>115+</h3>
                                                <span>Hospitals</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facilities gray">
                                                <h3>9+</h3>
                                                <span>Cities</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//End About -->
                </div>
            </div>
        </div>
    </section>
    <!--//End About Section -->
    <!--==================== Our Services ====================-->
     <section class="space light">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-style1">
                        <span>Our Services</span>
                        <h2>High Quality Services for You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider">
                        <div class="service-block yellow">
                            <img src="{{asset('assets/frontend/images/service-icon1.png')}}" alt="#">
                            <h3>Sports Orthopedics</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="{{asset('assets/frontend/images/services-bg1.png')}}" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block green">
                            <img src="{{asset('assets/frontend/images/service-icon2.png')}}" alt="#" />
                            <h3>Laser Piles Treatment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore</p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="{{asset('assets/frontend/images/services-bg2.png')}}" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block blue">
                            <img src="{{asset('assets/frontend/images/service-icon3.png')}}" alt="#" />
                            <h3>Hernia Treatment</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore
                            </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="{{asset('assets/frontend/images/services-bg3.png')}}" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block green">
                            <img src="{{asset('assets/frontend/images/service-icon3.png')}}" alt="#" />
                            <h3>Gallstone Treatment</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore
                            </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="{{asset('assets/frontend/images/services-bg4.png')}}" class="img-fluid" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center service-help_link">
                        Contact us for better help and services.
                        <a href="#">Let’s get started</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--==================== Footer ====================-->
    <footer>
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="foot-contact-block">
                        <a href="">
                            <img src="{{asset('assets/frontend/images/logo.png')}}" class="img-fluid" alt="#" />
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consect <br /> etur adipisicing elit, sed do eius mod <br />
                            tempor incididunt ut labore et dolore<br /> magna aliqua. Ut enim ad minim
                        </p>
                        <a href="callto:9711144230">
                            <h4><i class="fas fa-phone"></i>+91 97111 44 230</h4>
                        </a>
                        <a href="mailto:info@Glamyo.com">
                            <h4><i class="far fa-envelope"></i>info@glamyohealth.in</h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>About Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Mission</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Services</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Blogs & News</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Contact Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="foot-link-box">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Covid-19 Test</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Laser Surgery</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Liposuction</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Sports Orthopedics</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Gynaecomastia</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Online Consultation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box footlink-box_btn">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© Glamyo Healthcare 2020. All Rights Reserved</p>
                        <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="{{asset('assets/frontend/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider Js -->
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <!-- Magnific popup Js -->
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Script Js -->
    <script src="{{asset('assets/frontend/js/script.js')}}"></script>
</body>

</html>