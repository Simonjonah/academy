@include('pages.header')
        <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->
        <div class="hero-banner hero-style-3 bg-image">
            <div class="swiper university-activator">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img style="height: 250px;" data-transform-origin='center center' data-src="{{ asset('front/assets/images/bg/4.png') }}" class="swiper-lazy" alt="image">
                        <div class="thumbnail-bg-content">
                            <div class="container edublink-animated-shape">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="banner-content">
                                            <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">Welcome to Priscor Academy</span>
                                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">The Best Place to Learn Digital Skills</h1>
                                            <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">We are dedicatesd to give student the notch of ICT Skills in relevence to global Needs.</p>
                                            <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                                <a href="{{ url('courses') }}" class="edu-btn btn-secondary">Find courses <i class="icon-4"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img style="height: 250px;" data-transform-origin='center center' data-src="{{ asset('front/assets/images/bg/ict2.jpg') }}" class="swiper-lazy" alt="image">
                        <div class="thumbnail-bg-content">
                            <div class="container edublink-animated-shape">
                                <div class="row">
                                    <div class="col-7">
                                    <div class="banner-content">
                                            <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">Welcome to Priscor Academy</span>
                                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">The Best Place to Learn Digital Skills</h1>
                                            <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">We are dedicatesd to give student the notch of ICT Skills in relevence to global Needs.</p>
                                            <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                                <a href="{{ url('courses') }}" class="edu-btn btn-secondary">Find courses <i class="icon-4"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img style="height: 250px;" data-transform-origin='center center' data-src="{{ asset('front/assets/images/bg/1.png') }}" class="swiper-lazy" alt="image">
                        <div class="thumbnail-bg-content">
                            <div class="container edublink-animated-shape">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="banner-content">
                                            <span class="subtitle" data-sal="slide-up" data-sal-duration="1000">Welcome to Priscor Academy</span>
                                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">The Best Place to Learn Digital Skills</h1>
                                            <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">We are dedicatesd to give student the notch of ICT Skills in relevence to global Needs.</p>
                                            <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                                <a href="{{ url('courses') }}" class="edu-btn btn-secondary">Find courses <i class="icon-4"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slider-bg-controls">
                    <div class="swiper-slide-controls slide-prev">
                        <i class="icon-west"></i>
                    </div>
                    <div class="swiper-slide-controls slide-next">
                        <i class="icon-east"></i>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="2" src="front/assets/images/others/shape-10.png" alt="Shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="-3" src="front/assets/images/others/shape-11.png" alt="Shape">
                </li>
                <li class="shape-3">
                    <img src="front/assets/images/others/shape-25.png" alt="Shape">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       Features Area Start      	=-->
        <!--=====================================-->
        <!-- Start Categories Area  -->
        <div class="features-area-3">
            <div class="container">
                <div class="features-grid-wrap">
                    <div class="features-box features-style-3 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="front/assets/images/animated-svg-icons/scholarship-facility.svg" alt="animated icon">
                            <!-- <i class="icon-34"></i> -->
                        </div>
                        <div class="content">
                            <h4 class="title">Serene Environment</h4>
                            <p>Conducive Environment that are noice free which enhances effective learning</p>
                        </div>
                    </div>
                    <div class="features-box features-style-3 color-secondary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="front/assets/images/animated-svg-icons/skilled-lecturers.svg" alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Skilled Instructors</h4>
                            <p>Instructors that are well equip with modern Technologies.</p>
                        </div>
                    </div>
                    <div class="features-box features-style-3 color-extra02-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="front/assets/images/animated-svg-icons/book-library.svg" alt="animated icon">
                            <!-- <i class="icon-36"></i> -->
                        </div>
                        <div class="content">
                            <h4 class="title">Close Attention to Students</h4>
                            <p>We pay close attention to our student needs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Categories Area  -->
        <!--=====================================-->
        <!--=       About Area Start      		=-->
        <!--=====================================-->
        <div class="edu-about-area about-style-3">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-content">
                            <div class="section-title section-left">
                                <span class="pre-title">About Us</span>
                                <h2 class="title">We Provide Best <span class="color-primary">Digital</span> Services that specifically meet the global needs</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu" type="button" role="tab" aria-selected="true">Our Mission</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-mission" type="button" role="tab" aria-selected="false">Our Vision</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-vision" type="button" role="tab" aria-selected="false">Our Objectives</button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                    <p>Magna aliquaenim minim veniam quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet consectetur adipisicing elit sed do eius tempor incididunt labore.</p>
                                    <ul class="features-list">
                                        <li>Education award achived</li>
                                        <li>Available online courses</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                                    <ul class="features-list">
                                        <li>Industry Expert Instructor</li>
                                        <li>Up-to-Date Course Content</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer.</p>
                                    <ul class="features-list">
                                        <li>Online Remote Learning</li>
                                        <li>Lifetime Access For Learning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="front/assets/images/bg/2.png" alt="About Image">
                            <!-- <img class="main-img-2" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="front/assets/images/bg/1.png" alt="About Image"> -->
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="front/assets/images/about/shape-13.png" alt="Shape">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="front/assets/images/about/shape-39.png" alt="Shape">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="front/assets/images/about/shape-07.png" alt="Shape">
                                </li>
                                <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-5">
                    <img class="rotateit" src="front/assets/images/about/shape-13.png" alt="Shape">
                </li>
                <li class="shape-6">
                    <span></span>
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       CounterUp Area Start      	=-->
        
        <!--=       Course Area Start      		=-->
        <!--=====================================-->
        <!-- Start Course Area  -->
        <div class="edu-course-area course-area-3 section-gap-large bg-lighten04">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Popular Courses</span>
                    <h2 class="title">Academic Programs</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                <div class="isotope-wrapper">
                    
                    <div class="row g-5 isotope-list">
                        <!-- Start Single Course  -->
                        <div class="col-md-6 col-lg-4 isotope-item undergraduate graduate">
                            <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img src="assets/images/course/course-08.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Management</span>
                                        <h5 class="title">
                                            <a href="course-details.html">Public Administration</a>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span class="rating-count">(5.0 /7 Rating)</span>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-small btn-secondary" href="course-details.html">Learn More <i class="icon-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Course  -->
                        <!-- Start Single Course  -->
                        <div class="col-md-6 col-lg-4 isotope-item undergraduate graduate">
                            <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img src="assets/images/course/course-09.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>Online + Onsite</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Economics</span>
                                        <h5 class="title">
                                            <a href="course-details.html">Major in Economics</a>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span class="rating-count">(4.9 /5 Rating)</span>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-small btn-secondary" href="course-details.html">Learn More <i class="icon-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Course  -->
                        <!-- Start Single Course  -->
                        <div class="col-md-6 col-lg-4 isotope-item undergraduate online">
                            <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img src="assets/images/course/course-10.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>Online Only</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Business</span>
                                        <h5 class="title">
                                            <a href="course-details.html">Business Studies</a>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span class="rating-count">(4.7 /9 Rating)</span>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-small btn-secondary" href="course-details.html">Learn More <i class="icon-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Course  -->
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1">
                    <img class="d-block-shape-light" data-depth="2" src="front/assets/images/others/map-shape-3.png" alt="Shape">
                    <img class="d-none-shape-dark" data-depth="2" src="front/assets/images/others/3-Home-1.png" alt="Shape">
                </li>
                <li class="shape-2">
                    <img class="d-block-shape-light" data-depth="2" src="front/assets/images/others/map-shape-3.png" alt="Shape">
                    <img class="d-none-shape-dark" data-depth="2" src="front/assets/images/others/dark-map-shape-3.png" alt="Shape">
                </li>
            </ul>
        </div>
        <!-- End Course Area -->
        <!--=====================================-->
        <!--=       	Campus Area Start      =-->
        <!--=====================================-->
        
        <!-- Start Testimonial Area  -->
        <div class="testimonial-area-2 section-gap-large">
            <div class="container edublink-animated-shape">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Testimonials</span>
                            <h2 class="title">What Our Students <br> Have To Say</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <!-- <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incidid unt labore dolore magna aliquaenim minim.</p> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/images/testimonial/logo-01.png" alt="Logo"></div>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do umod tempor ux incididunt enim ad minim veniam quis nosrud citation laboris nisiste aliquip comodo perspiatix.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/testimonial-01.png" alt="Testimonial">
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Ray Sanchez</h5>
                                        <span class="subtitle">Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/images/testimonial/logo-02.png" alt="Logo"></div>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do umod tempor ux incididunt enim ad minim veniam quis nosrud citation laboris nisiste aliquip comodo perspiatix.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/testimonial-02.png" alt="Testimonial">
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Thomas Lopez</h5>
                                        <span class="subtitle">Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/images/testimonial/logo-03.png" alt="Logo"></div>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do umod tempor ux incididunt enim ad minim veniam quis nosrud citation laboris nisiste aliquip comodo perspiatix.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/testimonial-03.png" alt="Testimonial">
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Amber Page</h5>
                                        <span class="subtitle">Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/images/testimonial/logo-02.png" alt="Logo"></div>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do umod tempor ux incididunt enim ad minim veniam quis nosrud citation laboris nisiste aliquip comodo perspiatix.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/testimonial-04.png" alt="Testimonial">
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Robert Tapp</h5>
                                        <span class="subtitle">Content Creator</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <ul class="shape-group">
                    <li class="shape-1 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                        <img data-depth="1.4" src="front/assets/images/about/shape-30.png" alt="Shape">
                    </li>
                    <li class="shape-2 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                        <img data-depth="-1.4" src="front/assets/images/about/shape-25.png" alt="Shape">
                    </li>
                </ul>
            </div>
            <ul class="shape-group">
                <li class="shape-3" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img class="d-block-shape-light" data-depth="2" src="front/assets/images/others/map-shape-3.png" alt="Shape">
                    <img class="d-none-shape-dark" data-depth="2" src="front/assets/images/others/dark-map-2-shape-3.png" alt="Shape">
                </li>
            </ul>
        </div>
        <!-- End Testimonial Area  -->
        <!--=====================================-->
        <!--=       Video Area Start      		=-->
        <!--=====================================-->
        <!-- <div class="video-area-2 bg-image--14 bg-image">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="video-banner-content">
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="video-play-btn video-popup-activation">
                                    <i class="icon-18"></i>
                                </a>
                            </div>
                            <h2 class="title">Take a Video Tour to Learn Intro of Campus</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--=====================================-->
        <!--=       	CTA Area Start      	=-->
        <!--=====================================-->
        <!-- Start CTA Area  -->
       
      
        <!-- Start Event Area  -->
        <div class="edu-event-area event-area-1 gap-large-text">
            <div class="container edublink-animated-shape">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Events & News</span>
                    <h2 class="title">Popular Events & News</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                <div class="row g-5">
                    <!-- Start Event Grid  -->
                    <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-style-1">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="assets/images/event/event-01.jpg" alt="Blog Images">
                                    </a>
                                    <div class="event-time">
                                        <span><i class="icon-33"></i>08:00AM-10:00PM</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="event-date">
                                        <span class="day">30</span>
                                        <span class="month">SEP</span>
                                    </div>
                                    <h5 class="title"><a href="event-details.html">Learn English in Ease</a></h5>
                                    <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                    <ul class="event-meta">
                                        <li><i class="icon-40"></i>Newyork City, USA</li>
                                    </ul>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="event-details.html">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Event Grid  -->
                    <!-- Start Event Grid  -->
                    <div class="col-lg-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-style-1">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="assets/images/event/event-02.jpg" alt="Blog Images">
                                    </a>
                                    <div class="event-time">
                                        <span><i class="icon-33"></i>04:00PM-07:00PM</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="event-date">
                                        <span class="day">25</span>
                                        <span class="month">DEC</span>
                                    </div>
                                    <h5 class="title"><a href="event-details.html">Annual Workshop</a></h5>
                                    <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                    <ul class="event-meta">
                                        <li><i class="icon-40"></i>Washington D.C, USA</li>
                                    </ul>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="event-details.html">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Event Grid  -->
                    <!-- Start Event Grid  -->
                    <div class="col-lg-4 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-style-1">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="assets/images/event/event-03.jpg" alt="Blog Images">
                                    </a>
                                    <div class="event-time">
                                        <span><i class="icon-33"></i>10:00AM-11:00AM</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="event-date">
                                        <span class="day">15</span>
                                        <span class="month">NOV</span>
                                    </div>
                                    <h5 class="title"><a href="event-details.html">Design Think & Innovation</a></h5>
                                    <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor incididunt labore dolore magna.</p>
                                    <ul class="event-meta">
                                        <li><i class="icon-40"></i>Newyork City, USA</li>
                                    </ul>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="event-details.html">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Event Grid  -->
                </div>
                <div class="event-view-all-btn" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                    <h6 class="view-text">The Latest Events from Priscor Academy. <a href="event-grid.html" class="btn-transparent">View All <i class="icon-4"></i></a></h6>
                </div>

                <ul class="shape-group">
                    <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                        <img class="rotateit" src="front/assets/images/about/shape-13.png" alt="Shape">
                    </li>
                    <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                        <span data-depth=".9"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Event Area  -->
        
        <!--=====================================-->
        <!-- Start Ad Banner Area  -->
        <div class="university-cta-wrapper edu-cta-banner-area bg-image">
            <div class="container">
                <div class="edu-cta-banner">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <h2 class="title">Get Your Quality Skills <span class="color-primary">Certificate</span> Through Priscor Academy</h2>
                                <a href="{{ url('courses') }}" class="edu-btn btn-secondary">Get started now <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-01 scene">
                            <img data-depth="2.5" src="front/assets/images/cta/shape-10.png" alt="shape">
                        </li>
                        <li class="shape-02 scene">
                            <img data-depth="-2.5" src="front/assets/images/cta/shape-09.png" alt="shape">
                        </li>
                        <li class="shape-03 scene">
                            <img data-depth="-2" src="front/assets/images/cta/shape-08.png" alt="shape">
                        </li>
                        <li class="shape-04 scene">
                            <img data-depth="2" src="front/assets/images/about/shape-13.png" alt="shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Ad Banner Area  -->
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        @include('pages.footer')
