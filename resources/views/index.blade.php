@extends('frontendlayout.layout')

@section('content')


   
        <!-- banner section starts -->
        <section class="banner">
            <div class="banner-image"  style="background-image: url('frontendassets/assets/images/shape/shape-01.png');">
                        
                <div class="banner-carousel owl-theme owl-carousel">
                    <div class="slide-item"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="banner-slide">
                                        <div class="banner-content">
                                            <div class="banner-content-wrapper">
                                                <div class="banner-content-wrapper-inner">
                                                    <h4>Free healthcare without borders</h4>
                                                    <h2>Shalom Global Medical Missions<br> </h2>
                                                    <p>Extending  medical help to underserved communities  <br> around the world .</p>
                                                    <div class="btn-group">
                                                        <div class="header-link-btn"><a href="{{ url('donation') }}" class="btn-1"> Donate<span></span></a></div>
                                                        <div class="header-link-btn"><a href="{{ url('contact') }}" class="btn-1 btn-2"> Contact Us<span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="col-lg-5">
                                    <div class="banner-right-content">
                                        <div class="banner-right-image">
                                            <img src="{{ asset('frontendassets/assets/images/banner/banner-right-image1.png') }}" alt="banner-two-image">
                                        </div>
                                        <div class="border-image">
                                            <img src="{{ asset('frontendassets/assets/images/shape/border-image.png') }}" alt="border">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="banner-slide">
                                        <div class="banner-content">
                                            <div class="banner-content-wrapper">
                                                <div class="banner-content-wrapper-inner">
                                                    <h4>Support a Community to get batter</h4>
                                                    <h2>Treatment For All</h2>
                                                    <p>Join us to create a world where every individual regardless of the circumstances, religion, race, or location <br> has access to comprehensive healthcare services.</p>
                                                    <div class="btn-group">
                                                        <div class="header-link-btn"><a href="{{ url('about') }}t" class="btn-1"> Discover more<span></span></a></div>
                                                        <div class="header-link-btn"><a href="{{ url('contact') }}" class="btn-1 btn-2"> Contact Us<span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="col-lg-5">
                                    <div class="banner-right-content">
                                        <div class="banner-right-image">
                                            <img src="{{ asset('frontendassets/assets/images/banner/banner-right-image-002.png') }}" alt="banner-two-image">
                                        </div>
                                        <div class="border-image">
                                            <img src="{{ asset('frontendassets/assets/images/shape/border-image.png') }}" alt="border">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="banner-slide">
                                        <div class="banner-content">
                                            <div class="banner-content-wrapper">
                                                <div class="banner-content-wrapper-inner">
                                                    <h4>Partneering with</h4>
                                                    <h2>Shalom Global Medical Missions</h2>
                                                    <p> will enable us to locate the people in need of help and <br> together we will make an impact.</p>
                                                    <div class="btn-group">
                                                        <div class="header-link-btn"><a href="#" class="btn-1">Request<span></span></a></div>
                                                        <div class="header-link-btn"><a href="{{ url('contact') }}" class="btn-1 btn-2"> Contact Us<span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="col-lg-5">
                                    <div class="banner-right-content">
                                        <div class="banner-right-image">
                                            <img src="{{ asset('frontendassets/assets/images/banner/banner-right-image-003.png') }}" alt="banner-two-image">
                                        </div>
                                        <div class="border-image">
                                            <img src="{{ asset('frontendassets/assets/images/shape/border-image.png') }}" alt="border">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section ends -->

        



        <!-- services -->
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>What we do</h5>
                            <h3>Free Healthcare <br> For All</h3>
                            <div class="title-shape">
                                <img src="{{ asset('frontendassets/assets/images/shape/service-title-shape.png') }}" alt="map">
                            </div>
                        </div>
                    </div>
                    <div class="service-content-wrapper">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="service-container wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"> 
                                    <div class="service-container-overlay"></div> 
                                    <div class="service-number">
                                        <span>01</span>
                                    </div>
                                    <div class="service-container-inner">
                                        <div class="service-image">
                                            <img src="{{ asset('frontendassets/assets/images/icons/service-shape-01.png') }}" alt="shape">  
                                        </div>
                                        <div class="service-icon">
                                            <span class="icon-service-icon-01"></span>
                                        </div>
                                        <h5>Support</h5>
                                        <p>Shalom Global Medical Missions provides free medical support, screening and treatment for the less priviledge.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="service-container wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="service-container-overlay service-container-overlay-active"></div> 
                                    <div class="service-number">
                                        <span>02</span>
                                    </div>
                                    <div class="service-container-inner">
                                        <div class="service-image">
                                            <img src="{{ asset('frontendassets/assets/images/icons/service-shape-02.png') }}" alt="icon">
                                        </div>
                                        <div class="service-icon">
                                            <span class="icon-service-icon-02"></span>
                                        </div>
                                        <h5>Education<cation/h5>
                                        <p>We collaborate with professionals to train volunteers in communities, enhancing healthcare services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="service-container wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="service-container-overlay"></div> 
                                    <div class="service-number">
                                        <span>03</span>
                                    </div>
                                    <div class="service-container-inner">
                                        <div class="service-image">
                                            <img src="{{ asset('frontendassets/assets/images/icons/service-shape-03.png') }}" alt="icon">
                                        </div>
                                        <div class="service-icon">
                                            <span class="icon-service-icon-03"></span>
                                        </div>
                                        <h5>Outreach</h5>
                                        <p>We engage community leaders, donors, volunteers, and agencies to conduct medical outreaches for underserved communities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="service-container wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                    <div class="service-container-overlay"></div> 
                                    <div class="service-number">
                                        <span>04</span>
                                    </div>
                                    <div class="service-container-inner">
                                        <div class="service-image">
                                            <img src="{{ asset('frontendassets/assets/images/icons/service-shape-04.png') }}" alt="icon">
                                        </div>
                                        <div class="service-icon">
                                            <span class="icon-service-icon-04"></span>
                                        </div>
                                        <h5>Donations</h5>
                                        <p>
We raise funds to help marginalized individuals with critical medical conditions access healthcare</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services -->

        <!-- about -->
        <section class="about">
            <div class="vector-shape">
                <img src="{{ asset('frontendassets/assets/images/shape/vector-01.png') }}" alt="shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-left-container">
                            <div class="about-blank paroller"  style="transform: translateY(-11px);"></div>
                            <div class="about-image-1 wow fadeInUp">
                                <img src="{{ asset('frontendassets/assets/images/gallery/about-image-001.png') }}" alt="image">
                            </div>
                            <div  class="about-image-2 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="{{ asset('frontendassets/assets/images/gallery/about-image-02.png') }}" alt="image">
                            </div>
                            <div class="about-left-intro paroller" style="transform: translateY(-11px);">
                                <div class="about-left-intro-inner">
                                    <h5>SGMM</h5>
                                    <p>-creating a borderless healthcare at no cost</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-right-container">
                            <div class="common-title">
                                <h5>Welcome to Shalom Global Medical Missions</h5>
                                <p><b>We are a non-profit organization that look out for the healthcare needs
of underserved communities.</p></b>
                            </div>
                            
                            <p>Our vision is to create a world where every individual, regardless of their circumstances, religion, race, or location, has access to comprehensive healthcare services and the opportunity to live a healthy and fulfilling life.</p>

                            <p>We are committed to improving healthcare access and awareness globally through collaborative partnerships, sustainable initiatives, and compassionate service delivery, empowering communities especially the less privileged to thrive with dignity and resilience.</p>
                        
                            <!--<div class="about-progress">
                                <div id="skills-section">
                                    <h5>Charity</h5>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="75">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="skills-section-one">
                                    <h5>Donations</h5>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="45">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="header-link-btn"><a href="{{ url('about') }}" class="btn-1">Learn More<span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->

        <!-- causes -->
        <section class="causes">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Our Initiatives</h5>
                            <h3>Find out <br> and donate to our intervention program</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card">
                            <div class="causes-image-container">
                                <div class="causes-image-overlay wow"></div>
                                <div class="causes-image">
                                    <a href="{{ url('freetreatment') }}"><img src="{{ asset('frontendassets/assets/images/gallery/causes-01.png') }}" alt="img"></a>
                                    <div class="header-link-btn"><a href="{{ url('freetreatment') }}" class="btn-1">Free treatment<span></span></a></div>
                                </div>
                            </div> 
                            <div class="causes-content">
                                <a href="{{ url('freetreatment') }}" >Support our free treatment and care</a>
                                <p>We understand the critical importance of access to healthcare for all individuals, regardless of their financial circumstances. Our unwavering commitment to providing free treatment stems from our belief that healthcare is a fundamental human right that should not be determined by socio-economic status.</p>
                            </div>
                            <div class="header-link-btn"><a href="{{ url('condition') }}" class="btn-1">Report A Condition<span></span></a></div>
                            <!--<div class="causes-bar">
                                <div id="skills-section-two">
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="65">
                                            <span>65%</span>
                                        </div>
                                    </div>
                                </div>
                               <div class="causes-bar-info">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                               </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card">
                            <div class="causes-image-container">
                                <div class="causes-image-overlay wow"></div>
                                <div class="causes-image">
                                    <a href="{{ url('consultation') }}"><img src="{{ asset('frontendassets/assets/images/gallery/causes-02.png') }}" alt="img"></a>
                                    <div class="header-link-btn"><a href="{{ url('consultation') }}" class="btn-1">Medical consultation<span></span></a></div>
                                </div>
                            </div> 
                            <div class="causes-content">
                                <a href="/consultation">Free consultation for all</a>
                                <p>We are dedicated to offering essential medical consultations to individuals in underserved communities. Through the collaborative efforts of our compassionate team of healthcare professionals and volunteers, we deliver tailored medical consultations that address the specific needs of each person. 
 </p>
                            </div>
                            <div class="header-link-btn"><a href="{{ url('condition') }}" class="btn-1">Report A Condition<span></span></a></div>
                            <!--<div class="causes-bar causes-bar-3">
                                <div id="skills-section-three">
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="80">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                               <div class="causes-bar-info">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                               </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card">
                            <div class="causes-image-container">
                                <div class="causes-image-overlay wow"></div>
                                <div class="causes-image">
                                    <a href="{{ url('training') }}"><img src="{{ asset('frontendassets/assets/images/gallery/causes-03x.png') }}" alt="img"></a>
                                    <div class="header-link-btn"><a href="Health Health-Training.php" class="btn-1">Health Training<span></span></a></div>
                                </div>
                            </div> 
                            <div class="causes-content">
                                <a href="{{ url('training') }}">Taming health ignorance through training</a>
                                <p>As part of our initiatives, we are committed to offering health training to individuals residing in underserved communities across the globe. Our objective is to empower these communities by providing them with the necessary knowledge and skills to enhance their overall health and well-being.</p>
                            </div>
                            <div class="header-link-btn"><a href="{{ url('condition') }}" class="btn-1">Report A Condition<span></span></a></div>

                            <!--<div class="causes-bar">
                                <div id="skills-section-four">
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="70">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                               <div class="causes-bar-info">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                               </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- causes -->

        <!-- call to action -->
        <section class="call" style="background-image: url('frontendassets/assets/images/background/call-image-01.png')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="call-title">
                            <h2>Join the community to make<br>an impact </h2>
                            <div class="header-link-btn"><a href="{{ url('volunteer') }}" class="btn-1 btn-2">Volunteer Now<span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call to action -->

   <!-- events -->
        <section class="blog events">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Upcoming Events</h5>
                            <h3>Join our latest upcoming <br> events</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card event-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="causes-image blog-image event-image">
                                <img src="{{ asset('frontendassets/assets/images/gallery/event-1.png') }}" alt="img">
                            </div>
                            <div class="blog-contant event-content about-event-content">
                                <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">30 March 2023<span></span></a></div>
                                <div class="comments">
                                    <ul>
                                        <li><i class="fa fa-clock"></i> <span> 8:00pm</span></li>
                                        <li><i class="flaticon-pin"></i> <span> Dhaka</span></li>
                                    </ul>
                                </div>
                                <a href="#" class="hover-content">Contrary to popular belief</a>
                                <div class="blog-btn event-btn opacity-btn">
                                    <a href="#">Read More <i class="flaticon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card event-card wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="causes-image blog-image event-image">
                                <img src="{{ asset('frontendassets/assets/images/gallery/event-2.png') }}" alt="img">
                            </div>
                            <div class="blog-contant event-content about-event-content">
                                <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">30 March 2023<span></span></a></div>
                                <div class="comments">
                                    <ul>
                                        <li><i class="fa fa-clock"></i> <span> 8:00pm</span></li>
                                        <li><i class="flaticon-pin"></i> <span> New York</span></li>
                                    </ul>
                                </div>
                                <a href="#" class="hover-content">Basic Live Supoort CPR Training</a>
                                <div class="blog-btn event-btn opacity-btn">
                                    <a href="#">Read More <i class="flaticon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card event-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="causes-image blog-image event-image">
                                <img src="{{ asset('frontendassets/assets/images/gallery/event-3.png') }}" alt="img">
                            </div>
                            <div class="blog-contant event-content about-event-content">
                                <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">30 March 2023<span></span></a></div>
                                <div class="comments">
                                    <ul>
                                        <li><i class="fa fa-clock"></i> <span> 8:00pm</span></li>
                                        <li><i class="flaticon-pin"></i> <span> Khulna</span></li>
                                    </ul>
                                </div>
                                <a href="#" class="hover-content">Play for the world</a>
                                <div class="blog-btn event-btn opacity-btn">
                                    <a href="#">Read More <i class="flaticon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="event-bottom-btn">
                            <div class="header-link-btn"><a href="#" class="btn-1">View All Events<span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- events -->

        <!-- our mission -->
        <section class="mission">
            <div class="vector-two">
                <img src="{{ asset('frontendassets/assets/images/shape/vector-02.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="common-title">
                            <h5>Our Unique Approach</h5>
                            <h3>See How We Help <br> With  Our Outreach Event</h3>
                        </div>
                        <div class="mission-container">
                            <div class="mission-shape">
                                <img src="{{ asset('frontendassets/assets/images/shape/mission-shape.png') }}" alt="shape">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="mission-contant wow fadeInUp">
                                        <div class="mission-icon">
                                            <img src="{{ asset('frontendassets/assets/images/icons/mission-icon-01.png') }}" alt="icon">
                                        </div>
                                        <div class="mossion-info">
                                            <h5>Discover</h5>
                                            <p>We locate an underserved community either through a request or partnership</p>
                                          </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="mission-contant wow fadeInDown">
                                        <div class="mission-icon">
                                            <img src="{{ asset('frontendassets/assets/images/icons/mission-icon-02.png') }}" alt="icon">
                                        </div>
                                        <div class="mossion-info">
                                            <h5>Donations</h5>
                                            <p>We raise enough funds and resources that can help to support the outreach</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="mission-contant wow fadeInDown">
                                        <div class="mission-icon">
                                            <img src="{{ asset('frontendassets/assets/images/icons/mission-icon-03.png') }}" alt="icon">
                                        </div>
                                        <div class="mossion-info">
                                            <h5>Volunteering</h5>
                                            <p>We will bring together volunteer medical professionals so that they can train people who will
volunteer in the program.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="mission-contant wow fadeInUp">
                                        <div class="mission-icon">
                                            <img src="{{ asset('frontendassets/assets/images/icons/mission-icon-04.png') }}" alt="icon">
                                        </div>
                                        <div class="mossion-info">
                                            <h5>Patient Care</h5>
                                            <p>Medical screening, and treatment would be provided based on necessity, available
resources, and within our scope of practice.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-link-btn"><a href="{{ url('donation') }}" class="btn-1">Donate Now<span></span></a></div>
                    </div>

                    <div class="col-xl-4">
                        <div class="mission-video-image">
                            <img src="{{ asset('frontendassets/assets/images/gallery/mission-video-image.jpg') }}" alt="img">
                            <div class="missiom-video-btn">
                                <a href="https://www.youtube.com/watch?v=kS0X-yIsB64" target="_blank" class="hv-popup-link"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="mission-video-text">
                                <h2>Watch Video</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our mission -->

        <!-- fun fact -->
        <div class="fun-fact">
            <div class="container">
                <div class="fun-fact-container" style="background-image: url('frontendassets/assets/images/background/fun-fact-bg-image.jpg');">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="funfact-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-21"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="458">0</span><span>+</span>
                                    </div>
                                    <p>Total Outreaches</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="funfact-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-21"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="425">0</span><span>+</span>
                                    </div>
                                    <p>Raised Funds</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="funfact-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-21"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="548">0</span><span>+</span>
                                    </div>
                                    <p>Satisfied Donors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="funfact-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-21"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="808">0</span><span>+</span>
                                    </div>
                                    <p>Happy Volunteers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fun fact -->

        <!-- team starts 
        <section class="team">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Our Volunteers</h5>
                            <h3>Meet Our Expert Team</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                        <div class="team-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="team-content-wrapper">
                                <div class="team-image">
                                    <img src="{{ asset('frontendassets/assets/images/team/team-01.png') }}" alt="image">
                                    <div class="team-media">
                                        <ul>
                                            <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-share">
                                    <a href="#"><i class="flaticon-share"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <a href="team-3.html">Floyd Miles</a>
                                <span>Volunteers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                        <div class="team-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="team-content-wrapper">
                                <div class="team-image">
                                    <img src="{{ asset('frontendassets/assets/images/team/team-02.png') }}" alt="image">
                                    <div class="team-media">
                                        <ul>
                                            <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-share">
                                    <a href="#"><i class="flaticon-share"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <a href="team-3.html">Kristin Watson</a>
                                <span>Volunteers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                        <div class="team-content wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="team-content-wrapper">
                                <div class="team-image">
                                    <img src="{{ asset('frontendassets/assets/images/team/team-03.png') }}" alt="image">
                                    <div class="team-media">
                                        <ul>
                                            <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-share">
                                    <a href="#"><i class="flaticon-share"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <a href="team-3.html">Courtney Henry</a>
                                <span>Volunteers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                        <div class="team-content wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                            <div class="team-content-wrapper">
                                <div class="team-image">
                                    <img src="{{ asset('frontendassets/assets/images/team/team-04.png') }}" alt="image">
                                    <div class="team-media">
                                        <ul>
                                            <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-share">
                                    <a href="#"><i class="flaticon-share"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <a href="team-3.html">Jenny Wilson</a>
                                <span>Volunteers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 text-center">
                        <div class="header-link-btn"><a href="team.html" class="btn-1">View All Team<span></span></a></div>
                    </div>
                </div>
            </div>
        </section>
        team ends -->

        <!-- sponsor 
        <div class="sponsor">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-carousel owl-carousel owl-theme">
                            <div class="sponsore-logo">
                                <img src="{{ asset('frontendassets/assets/images/brand/brand-01.png') }}" alt="logo">
                            </div>
                            <div class="sponsore-logo">
                                <img src="{{ asset('frontendassets/assets/images/brand/brand-02.png') }}" alt="logo">
                            </div>
                            <div class="sponsore-logo">
                                <img src="{{ asset('frontendassets/assets/images/brand/brand-03.png') }}" alt="logo">
                            </div>
                            <div class="sponsore-logo">
                                <img src="{{ asset('frontendassets/assets/images/brand/brand-04.png') }}" alt="logo">
                            </div>
                            <div class="sponsore-logo">
                                <img src="{{ asset('frontendassets/assets/images/brand/brand-05.png') }}" alt="logo">
                            </div>
                            <div class="sponsore-logo">
                                <img src="{{ asset('frontendassets/assets/images/brand/brand-03.png') }}" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         sponsor -->

        <!-- testimonial 
        <section class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Testimonials</h5>
                            <h3>What People Say About <br> Our Organization</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pattern-layer" style="background-image: url('frontendassets/assets/images/shape/shape-02.png);"></div>
            <div class="testimonial-container">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="testimonial-image-container">
                                <div class="testimonial-image-one">
                                    <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-01.png') }}" alt="photo">
                                </div>
                                <div class="testimonial-image-two">
                                    <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-02.png') }}" alt="photo">
                                </div>
                                <div class="testimonial-image-three">
                                    <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-03.png') }}" alt="photo">
                                </div>
                                <div class="testimonial-image-four">
                                    <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-04.png') }}" alt="photo">
                                </div>
                                <div class="testimonial-image-five">
                                    <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-05.png') }}" alt="photo">
                                </div>
                                <div class="testimonial-image-six">
                                    <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-06.png') }}" alt="photo">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                            <div class="testimonials-carousel owl-carousel owl-theme">
                                <div class="tesstimonial-right-content">
                                    <div class="testimonial-content-text">
                                        <p>There are many variations of nostrud passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised enim veli amet.</p>
                                        <div class="testimonial-right-content-wrapper">
                                            <div class="testimonial-right-wrapper-inner">
                                                <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-image-07.png') }}" alt="image">
                                                <div class="testimonial-info">
                                                    <h6>Annette Black</h6>
                                                    <span>Volunteers</span>
                                                </div>
                                            </div>
                                            <div class="quait">
                                                <img src="{{ asset('frontendassets/assets/images/shape/quote-01.png') }}" alt="quite">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tesstimonial-right-content">
                                    <div class="testimonial-content-text">
                                        <p>There are many variations of nostrud passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised enim veli amet.</p>
                                        <div class="testimonial-right-content-wrapper">
                                            <div class="testimonial-right-wrapper-inner">
                                                <img src="{{ asset('frontendassets/assets/images/gallery/testimonial-06.png') }}" alt="image">
                                                <div class="testimonial-info">
                                                    <h6>Donald Vaucher</h6>
                                                    <span>Volunteers</span>
                                                </div>
                                            </div>
                                            <div class="quait">
                                                <img src="{{ asset('frontendassets/assets/images/shape/quote-01.png') }}" alt="quite">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        testimonial -->

        <!-- contact -->
        <section class="home-contact" style="background-image: url('frontendassets/assets/images/background/home-contact-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="call-title ">
                            <h2>How Can You Help?</h2>
                            <p>Your donation will help us save and improve lives with research, education and emergency care.</p>
                            <div class="btn-group">
                                <div class="header-link-btn"><a href="{{ url('donation') }}" class="btn-1">Donate Now<span></span></a></div>
                                <div class="header-link-btn"><a href="{{ url('sponsorcreate') }}" class="btn-1 btn-2"> Become A Sponsor<span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->

        <!-- blog 
        <section class="blog">
            <div class="blank"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Latest Blog</h5>
                            <h3>Latest news & articles directly <br> coming from the blog</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <a href="blog-details.html" class="causes-image blog-image">
                                <img src="{{ asset('frontendassets/assets/images/gallery/blog-01.png') }}" alt="img">
                            </a>
                            <div class="blog-contant">
                                <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">20 Feb 2022<span></span></a></div>
                                <div class="comments">
                                    <ul>
                                        <li><i class="flaticon-user"></i> <span> Admin</span></li>
                                        <li><i class="flaticon-bubble-chat"></i> <span> Comment</span></li>
                                    </ul>
                                </div>
                                <a href="blog-details.html" class="hover-content">How does the malnution affect children?</a>
                                <p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
                            </div>
                            <div class="blog-btn">
                              <a href="blog-details.html">Read More <i class="flaticon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1500ms">
                            <a href="blog-details.html" class="causes-image blog-image">
                                <img src="{{ asset('frontendassets/assets/images/gallery/blog-02.png') }}" alt="img">
                            </a>
                            <div class="blog-contant">
                                <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">20 Feb 2022<span></span></a></div>
                                <div class="comments">
                                    <ul>
                                        <li><i class="flaticon-user"></i> <span> Admin</span></li>
                                        <li><i class="flaticon-bubble-chat"></i> <span> Comment</span></li>
                                    </ul>
                                </div>
                                <a href="blog-details.html" class="hover-content">Our 10 Favourite Climate Strike protest signs</a>
                                <p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
                            </div>
                            <div class="blog-btn">
                              <a href="blog-details.html">Read More <i class="flaticon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <a href="blog-details.html" class="causes-image blog-image">
                                <img src="{{ asset('frontendassets/assets/images/gallery/blog-03.png') }}" alt="img">
                            </a>
                            <div class="blog-contant">
                                <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">20 Feb 2022<span></span></a></div>
                                <div class="comments">
                                    <ul>
                                        <li><i class="flaticon-user"></i> <span> Admin</span></li>
                                        <li><i class="flaticon-bubble-chat"></i> <span> Comment</span></li>
                                    </ul>
                                </div>
                                <a href="blog-details.html" class="hover-content">There are many variations of passages of Lorem</a>
                                <p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
                            </div>
                            <div class="blog-btn">
                              <a href="blog-details.html">Read More <i class="flaticon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         blog -->

        <!-- map -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d48474.64872611011!2d-75.5188393826804!3d40.59313733852438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4140%20Parker%20Rd.%20Allentown%2C%20New%20Mexico!5e0!3m2!1sen!2sbd!4v1676449615021!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- map -->




@endsection