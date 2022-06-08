<footer class="text-inverse" style="background: #00568B;">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="d-lg-flex flex-row align-items-lg-center">
            <h3 class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">Get Familiar With Our Process.
            <br>
            <span class="lead">Our process is seamless and easy to understand. All information about you is safe with us. We pay close attention to details as we gather experiences from tenants and landlords all over London</span>
            </h3>
            {{-- <a href="#" class="btn btn-outline-primary rounded-pill mb-0 text-nowrap">Try It For Free</a> --}}
            <a href="{{ route('contactUs') }}" class="btn btn-expand btn-soft-primary rounded-pill">
                <i class="uil uil-arrow-right"></i>
                <span>Contact Us</span>
            </a>
        </div>
        <!--/div -->
        <hr class="mt-11 mb-12" />
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <img class="mb-4" src="/front/assets/img/kiji-logo-white.png" srcset="/front/assets/img/kiji-logo-white.png 2x"
                        alt="" />
                    <p class="mb-4">&copy; {{ date('Y') }} Kijii. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social social-white">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                    <address class="pe-xl-15 pe-xxl-17">50 Mortimer Square, Milton Keynes MK9 2FB, United Kingdom
                    </address>
                    <a href="mailto:#">obinna@kijiiapp.com</a><br /> +44 7563 117246
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Learn More</h4>
                    <ul class="list-unstyled  mb-0">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        {{-- <li><a href="#">Our Story</a></li> --}}
                        {{-- <li><a href="#">Projects</a></li> --}}
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            {{-- <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                    <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form
                                action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                class="validate dark-fields" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="EMAIL"
                                            class="required email form-control" placeholder="Email Address"
                                            id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Email Address</label>
                                        <input type="submit" value="Join" name="subscribe"
                                            id="mc-embedded-subscribe2" class="btn btn-blue ">
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none"></div>
                                        <div class="response" id="mce-success-response2" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                            type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1"
                                            value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div> --}}
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
