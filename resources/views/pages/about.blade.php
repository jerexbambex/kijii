@extends('layouts.front-template')

@section('title')
<title>Kijii | Contact Us</title>
@stop

@section('content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-20 pt-md-14 pb-md-23 text-center">
        <div class="row">
            <div class="col-xl-5 mx-auto mb-6">
                <h1 class="display-1 mb-3">About Us</h1>
                <p class="lead mb-0">A company turning ideas into beautiful things.</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row text-center mb-12 mb-md-15">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-n18 mt-md-n22">
                <figure><img class="w-auto" src="/front/assets/img/illustrations/i8.png"
                        srcset="/front/assets/img/illustrations/i8@2x.png 2x" alt="" /></figure>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <ul class="progress-list">
                    <li>
                        <p>Marketing</p>
                        <div class="progressbar line blue" data-value="100"></div>
                    </li>
                    <li>
                        <p>Strategy</p>
                        <div class="progressbar line green" data-value="80"></div>
                    </li>
                    <li>
                        <p>Development</p>
                        <div class="progressbar line yellow" data-value="85"></div>
                    </li>
                    <li>
                        <p>Data Analysis</p>
                        <div class="progressbar line orange" data-value="90"></div>
                    </li>
                </ul>
                <!-- /.progress-list -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h3 class="display-5 mb-5">The full service we are offering is specifically designed to meet your
                    business needs and projects.</h3>
                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                    duis mollis commodo.</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-6 gy-md-0 text-center">
            <div class="col-md-6 col-lg-3">
                <img src="/front/assets/img/icons/lineal/megaphone.svg"
                    class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                <h4>Marketing</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget
                    metus. Cras justo cum sociis natoque magnis.</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <img src="/front/assets/img/icons/lineal/target.svg"
                    class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                <h4>Strategy</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget
                    metus. Cras justo cum sociis natoque magnis.</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <img src="/front/assets/img/icons/lineal/settings-3.svg"
                    class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                <h4>Development</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget
                    metus. Cras justo cum sociis natoque magnis.</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <img src="/front/assets/img/icons/lineal/bar-chart.svg"
                    class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                <h4>Data Analysis</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget
                    metus. Cras justo cum sociis natoque magnis.</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-4">
                <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
                <h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac,
                    vestibulum at eros tempus porttitor.</p>
                <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>
            </div>
            <!--/column -->
            <div class="col-lg-8">
                <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3"
                    data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="/front/assets/img/avatars/t1.jpg"
                                    srcset="/front/assets/img/avatars/t1@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Cory Zamora</h4>
                                <div class="meta mb-2">Marketing Specialist</div>
                                <p class="mb-2">Etiam porta sem magna malesuada mollis.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-slack"></i></a>
                                    <a href="#"><i class="uil uil-linkedin"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="/front/assets/img/avatars/t2.jpg"
                                    srcset="/front/assets/img/avatars/t2@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Coriss Ambady</h4>
                                <div class="meta mb-2">Financial Analyst</div>
                                <p class="mb-2">Aenean eu leo quam. Pellentesque ornare lacinia.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="/front/assets/img/avatars/t3.jpg"
                                    srcset="/front/assets/img/avatars/t3@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Nikolas Brooten</h4>
                                <div class="meta mb-2">Sales Manager</div>
                                <p class="mb-2">Donec ornare elit quam porta gravida at eget.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-linkedin"></i></a>
                                    <a href="#"><i class="uil uil-tumblr-square"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="/front/assets/img/avatars/t4.jpg"
                                    srcset="/front/assets/img/avatars/t4@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Jackie Sanders</h4>
                                <div class="meta mb-2">Investment Planner</div>
                                <p class="mb-2">Nullam risus eget urna mollis ornare vel eu leo.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="/front/assets/img/avatars/t5.jpg"
                                    srcset="/front/assets/img/avatars/t5@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Tina Geller</h4>
                                <div class="meta mb-2">Assistant Buyer</div>
                                <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-slack"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@stop
