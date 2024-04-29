<!-- news-letter -->
<section class="news_letter">
  <div class="auto_container">
    <div class="news_letter_content">
      <div class="row">
        <div class="col-xl-6 col-lg-12">
          <div class="news_letter_left p_relative">
            <h3>Newsletter</h3>
            <h4>To get weekly & monthly news, <br>
              Subscribe to our newsletter.</h4>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 ps-xl-0">
          <div class="news_letter_right p_relative">
            <div class="form-inner p_relative">
              <form action="{{ url('newsletter') }}" method="post" class="subscribe-form">@csrf
                <div class="form-group">
                  <input type="email" name="newsletters_email" placeholder="Your mail address" required>
                  <div class="news-form-btn">
                    <button type="submit" name="newsletters_sub" class="news_letter_btn btn-1 btn-alt">Subscribe</button>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- news-letter-end -->

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
  <span class="icon-42"><i class="fa fa-angle-double-right"></i></span>
</button>
<!--Scroll to top-->

<!-- main-footer -->
<footer class="main__footer p_relative">
            <div class="main__footer__top" style="background-image: url('frontendassets/assets/images/shape/shape-01.png);">
                <div class="footer__middle  p_relative d_block">
                    <div class="auto_container">
                        <div class="footer__middle__content">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 footer_column">
                                    <div class="footer_widget left">
                                        <div class="footer__logo">
                                            <figure>
                                                <img src="{{ asset('frontendassets/assets/images/footer-logo1.png') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="widget_content">
                                            <p>
                                                 Shalom Global Medical Mission is a non-profit organisation that provides Healthcare Without Borders:
Screening and Treatment for All.
                                            </p>
                                        </div>  
                                        <div class="widget_media">
                                            <ul>
                                                <li><a href="#0"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                                                <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                                <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                                <li><a href="#0"><i class="flaticon-pinterest"></i></a></li>
                                            </ul>
                                        </div>    
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 footer_column">
                                    <div class="footer_widget links_widget ml_100">
                                        <div class="widget_title">
                                            <h4>Learn More</h4>
                                        </div>
                                        <div class="widget_content">
                                            <ul class="links_list clearfix">
                                                <li><a href="{{ url('about') }}">Mission/Vision</a></li>
                                                <li><a href="{{ url('conditon') }}">Report A Condition</a></li>
                                                <li><a href="{{ url('sponsorcreate') }}">Become A Partner</a></li>
                                                <li><a href="{{ url('event') }}">Events</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                                    <div class="footer_widget links_widget">
                                        <div class="widget_title">
                                            <h4>Our Initiative</h4>
                                        </div>
                                        <div class="widget_content">
                                            <ul class="links_list clearfix">
                                                <li><a href="{{ url('freetreatment') }}">Free Treatment</a></li>
                                                <li><a href="{{ url('medicalscreening') }}">Medical Screening</a></li>
                                                <li><a href="{{ url('team') }}">Medical Help</a></li>
                                                <li><a href="{{ url('campaign') }}">Medical Outreach</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                                    <div class="footer_widget links_widget">
                                        <div class="widget_title">
                                            <h4>Contact</h4>
                                        </div>
                                        <div class="widget_content">
                                            <ul class="links_list right">
                                                <li>19173 E. Lasalle place, Aurora, CO. 80013</li>
                                                <li><a href="info@shalomglobalmedicalmission.org"><i class="flaticon-email"></i> info@shalomglobalmedical<br>mission.org</a></li>
                                                <li><a href="tel:720 300 0427"><i class="flaticon-phone-call"></i>720 300 0427</a></li>
                                                <li><div class="header-link-btn footer-donate"><a href="donate.html" target="_blank" class="btn-1 btn-alt">Donate Now <span></span></a></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom p_relative">
                <div class="auto_container">
                    <div class="bottom_inner  p_relative">
                        <div class="copyright"><p> Shalom Global Medical Missions 2024</p></div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- main-footer end -->