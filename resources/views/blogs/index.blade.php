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
                                    href="{{ route('blogShow', 'first-post') }}"><img src="/front/assets/img/blog/Picture1.png" alt="" /></a>
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
                                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{ route('blogShow', 'first-post') }}">How To Buy A House in the UK and the Role of Property Review Platform</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Buying a new property in the UK can be overwhelming, especially for new homeowners. However, you can streamline the process. What factor should you consider, and how can a property review platform help? In this article, we will explore a guide on how to buy a home in the UK and the role property review platforms like Kijii play in helping you get your ideal home!</p>
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
                                            <div class="swiper-slide"><img src="/front/assets/img/blog/Picture2.png" alt="" />
                                            </div>
                                            {{-- <div class="swiper-slide"><img src="/front/assets/img/blog/b3.jpg" alt="" />
                                            </div> --}}
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
                                            href="{{ route('blogShow', 'second-post') }}">What To Look Out for When Renting a Property in the UK</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Whether you're moving into an apartment for the first time or making a second move, renting an apartment is an exciting endeavour. However, finding a good apartment comes with many challenges, and no matter how versed you are in apartment renting, the process can be overwhelming. But with the right information, apartment hunting can become an enjoyable process. In this article, we’ll outline what to look out for when renting a property in the UK!</p>
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
