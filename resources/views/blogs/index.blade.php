@extends('layouts.front-template')

@section('title')
<title>Kijii | Contact Us</title>
@stop

@section('content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                <h1 class="display-1 mb-3">Kijii Blog</h1>
                <p class="lead px-lg-5 px-xxl-8">Welcome to our journal. Here you can find the latest company news and
                    business articles.</p>
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
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog classic-view mt-n17">
                    <article class="post">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale"><a class="link-dark"
                                    href="{{ route('blogShow') }}"><img src="/front/assets/img/photos/b1.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Teamwork</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="./blog-post.html">Amet
                                            Dolor Bibendum Parturient Cursus</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                        odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae
                                        elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis
                                        consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo,
                                        tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet
                                        fermentum. Sed posuere consectetur.</p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                    </article>
                    <!-- /.post -->
                    <article class="post">
                        <div class="card">
                            <div class="post-slider card-img-top">
                                <div class="swiper-container dots-over" data-margin="5" data-nav="true"
                                    data-dots="true">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="/front/assets/img/photos/b2.jpg" alt="" />
                                            </div>
                                            <div class="swiper-slide"><img src="/front/assets/img/photos/b3.jpg" alt="" />
                                            </div>
                                        </div>
                                        <!--/.swiper-wrapper -->
                                    </div>
                                    <!-- /.swiper -->
                                </div>
                                <!-- /.swiper-container -->
                            </div>
                            <!-- /.post-slider -->
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Ideas</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                            href="{{ route('blogShow') }}">Fringilla Ligula Pharetra Amet</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                        odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae
                                        elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis
                                        consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo,
                                        tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet
                                        fermentum. Sed posuere consectetur.</p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                    </article>
                    <!-- /.post -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@stop
