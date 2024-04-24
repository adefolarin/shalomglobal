        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php">
                  <img src="{{ asset('frontendassets/assets/images/SGMMlogo.png') }}" alt="logo"></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>19173 E. Lasalle place, Aurora, CO. 80013</li>
                        <li><a href="tel:720 300 0427">720 300 0427</a></li>
                        <li><a href="mailto:info@shalomglobalmedicalmission.org">info@shalomglobalmedicalmission.org</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

<!-- main header -->
<header class="main-header style-one">
            
            <div class="header-lower">

                <!-- header-top -->
                <div class="header_top">
                    <div class="auto_container">
                        <div class="header_top_left">
                            <ul class="top_left">
                                <li><a href="tel:+13032465013"><i class="flaticon-phone-call
                                    "></i>720 300 0427</a></li>
                                <li><a href="mailto:info@shalomglobalmedicalmission.org"><i class="flaticon-email"></i>info@shalomglobalmedicalmission.org</a></li>
                                <li><img src="{{ asset('frontendassets/assets/images/icons/location.png') }}" alt="icon"> 
                                19173 E. Lasalle place, Aurora, CO. 80013</li>
                            </ul>
                        </div>
                        <div class="header_top_right">
                            <div class="header_right_info">
                                <ul class="top_right">
                                    <li><a href="#"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    <!--<li><a href="#"><i class="flaticon-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top -->
                
                <div class="header_bottom p_relative">
                    <div class="logo__shape"></div>
                    <div class="auto_container">
                        <div class="outer-box">
                            <div class="logo-box">
                                <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('frontendassets/assets/images/SGMMlogo1.png') }}" alt=""></a></figure>
                            </div>
                            <div class="menu-area">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                </div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a href="{{ url('/') }}">Home</a>
                                                </li>
                                            <li class="dropdown"><a href="{{ url('about') }}">About Us</a>
                                                <ul>
                                                    <li><a href="{{ url('about') }}">Mission & Vision</a>
                                                    </li>
                                                    <li><a href="{{ url('team') }}">Leadership</a>
                                                    </li>
                                                   <li><a href="{{ url('team') }}">Volunteer</a>
                                                    </li>
                                                    <!--<li><a href="testimonials.php">Impact</a>
                                                    </li>-->

                                                </li>
                                            </ul>
                                            <li class="dropdown"><a href="#">Our Initiatives</a>
                                                <ul>
                                                    <li><a href="{{ url('freetreatment') }}" >Free Treatment</a></li>

                                                     <li><a href="{{ url('medicalscreening') }}" >Medical Screening</a></li>
                                                     <li><a href="{{ url('consultation') }}" >Consultations</a></li>
                                                      <li><a href="{{ url('training') }}" >Health Training</a></li><li><a href="{{ url('campaign') }}">Medical Outreach</a></li>

                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Get Involved</a>
                                                <ul>
                                                    <li class="dropdown"><a href="#">Events</a>
                                                        <ul>
                                                            <!--<li><a href="events.php">Events</a></li>-->
                                                            <li><a href="{{ url('event') }}">Events</a></li>
                                                            <li><a href="{{ url('event-upcoming') }}">Upcoming Event</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a href="#">Partnership</a>
                                                        <ul>
                                                            <li><a href="{{ url('volunteer') }}">Become A Volunteer</a></li>
                                                            <li><a href="{{ url('community') }}">Request For A Community</a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li><a href="{{ url('condition') }}">Report A Condition</a>
                                            </li> 
                                                    
                                                 <li><a href="{{ url('sponsorcreate') }}">Become A Sponsor</a></li>
                                                </ul>
                                            
                                            <!--<li><a href="events.php">Event</a>
                                                <ul>
                                                    <li><a href="blog-grid.html">Bl</a></li>
                                                    <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>--> 

                                            <li class="dropdown"><a href="#">ConnectSGMM</a>
                                            <ul>
                                            <li><a href="{{ url('contact') }}">Contact Us</a>
                                            </li> 
                                            <li><a href="{{ url('faq') }}">FAQs</a></li>
                                              <li><a href="{{ url('galllery') }}">Our Gallery</a></li>
                                              <li><a href="{{ url('resource') }}">Resources</a></li>
                                           </ul>
                                          </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="header__right">
                                <div class="header__right__button">
                                    <div class="header-link-btn"><a href="{{ url('donation') }}" class="btn-1 btn-alt">Donate Now <span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto_container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('frontendassets/assets/images/SGMMlogo1.png') }}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!-- main-header end -->