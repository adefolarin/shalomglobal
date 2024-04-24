@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" style="background-image: url('assets/images/banner/common-banner-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Contact us</h3>
                            <a href="#">Home </a>/
                            <span> Contact us</span>
                        </div>
                    </div>
                </div>
            </div>
            @if($errors->any())
                    <div class="alert alert-danger" style="margin-top:50px;padding:30px;">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:50px;padding:30px;">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                            
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:50px;padding:30px;">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        </section>
        <!-- common banner -->

        <!-- contact us -->
        <section class="contact-us">
            <div class="pattern-layer" style="background-image: url('frontendassets/assets/images/shape/shape-02.png')"></div>
            <form enctype="multipart/form-data" method="post" action="{{ url('contact') }}">@csrf
            <div class="container">
                <div class="row">
 
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Contact with us</h5>
                            <h3>Send Us A Message For <br> Next Project</h3>
                        </div>
                    </div>
                  
                    <div class="col-xl-6">                   
                            <input type="text" name="contacts_name" class="contuct-us-input" placeholder="Your Name" required>                  
                    </div>
                    <div class="col-xl-6">                  
                            <input type="email" name="contacts_email" class="contuct-us-input" placeholder="Your Email" required>                     
                    </div>
                    <div class="col-md-6">
                            <input type="number" name="contacts_pnum" class="contuct-us-input" placeholder="Phone Number" required>                       
                    </div>
                    <div class="col-md-6">                 
                            <input type="text" name="contacts_subject" class="contuct-us-input" placeholder="Subject" required>                    
                    </div>
                    <div class="col-md-12">                    
                            <textarea name="contacts_message" class="contuct-us-input contuct-us-textarea" required placeholder="Your Message"></textarea>                      
                    </div>
                    <div class="col-xl-12">
                        <div class="contact-us-btn">                   
                            <button type="submit" class="btn-1">Send Message <span></span></button> 
                        </div>
                    </div>
                  
                </div>
            </div>
            </form>
        </section>

        <!-- contact us -->

        <!-- contact container -->
        <section class="contact-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-containt wow fadeInLeft">
                            <h5>Quick Contact</h5>
                            <div class="contact-info">
                                <div class="contact-info-left">
                                    <a href="#"><i class="fa fa-phone"></i></a>
                                </div>
                                <div class="contact-info-right">
                                    <p>Main Office</p>
                                    <a href="tel:(+233)456-789-01">(+233)456-789-01</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-containt wow fadeInUp">
                            <h5>Email Address</h5>
                            <div class="contact-info">
                                <div class="contact-info-left">
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                                <div class="contact-info-right">
                                    <p>Mail to</p>
                                    <a href="mailto:info@example.com">info@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-containt wow fadeInRight">
                            <h5>Mailing Address</h5>
                            <div class="contact-info">
                                <div class="contact-info-left">
                                    <a href="#"><i class="flaticon-location"></i></a>
                                </div>
                                <div class="contact-info-right">
                                    <p>3891 Ranchview Dr. Richardson, <br>California 62639</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact container -->

        <!-- map -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d48474.64872611011!2d-75.5188393826804!3d40.59313733852438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4140%20Parker%20Rd.%20Allentown%2C%20New%20Mexico!5e0!3m2!1sen!2sbd!4v1676449615021!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- map -->

    @endsection