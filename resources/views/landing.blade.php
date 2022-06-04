@extends('layouts.front-template')

@section('title')
<title>Kijii | Welcome</title>
@stop

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown"
                    data-group="page-title">
                    <h1 class="display-1 mb-4">Choosing a new home to buy or rent has never been this easy</h1>
                    <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7">Take your property hunting to the next level. Get first-hand information about your choice property in the UK.</p>
                    <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons"
                        data-delay="600">
                        <span><a class="btn btn-primary rounded-pill mx-1">Get Started</a></span>
                        {{-- <span><a class="btn btn-soft-blue rounded-pill mx-1">Free Trial</a></span> --}}
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-10">
            <div class="row gx-0 mb-16 mb-mb-20">
                <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20" data-cues data-group="images"
                    data-delay="1500">
                    <img class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp" src="/front/assets/img/photos/sa1.jpg"
                        srcset="/front/assets/img/photos/kijii-home.png 2x" alt="" />
                    <img class="position-absolute rounded shadow-lg" data-cue="slideInRight"
                        src="/front/assets/img/photos/sa2.jpg" srcset="/front/assets/img/photos/kijii-69.png 2x"
                        style="top: 20%; right:-10%; max-width:30%; height: auto;" alt="" />
                    <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft"
                        src="/front/assets/img/photos/sa3.jpg" srcset="/front/assets/img/photos/kijii-103.png 2x"
                        style="top: 10%; left:-10%; max-width:30%; height: auto;" alt="" />
                    <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft"
                        src="/front/assets/img/photos/sa4.jpg" srcset="/front/assets/img/photos/kijii-6.png 2x"
                        style="bottom: 10%; left:-13%; max-width:30%; height: auto;" alt="" />
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            {{-- <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
                <div class="col-lg-6 position-relative">
                    <div class="shape rounded bg-pale-red rellax d-block" data-rellax-speed="0"
                        style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                    </div>
                    <div class="row gx-md-5 gy-5 position-relative">
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300"
                                src="/front/assets/img/photos/sa5.jpg" srcset="/front/assets/img/photos/sa5@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                                data-delay="600" src="/front/assets/img/photos/sa6.jpg"
                                srcset="/front/assets/img/photos/sa6@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900"
                                src="/front/assets/img/photos/sa7.jpg" srcset="/front/assets/img/photos/sa7@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                                src="/front/assets/img/photos/sa8.jpg" srcset="/front/assets/img/photos/sa8@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5">We have considered our solutions to support every stage of growth.</h3>
                    <p class="mb-5">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
                        fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac
                        cursus commodo.</p>
                    <div class="row gy-3">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-red mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit
                                        consectetur.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna
                                        mollis ornare aenean leo.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-red mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis
                                        nisl ornare.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus
                                        augue rutrum maecenas odio.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape rounded bg-pale-green rellax d-block" data-rellax-speed="0"
                        style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                    </div>
                    <div class="row gx-md-5 gy-5 position-relative">
                        <div class="col-5">
                            <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" data-cue="fadeIn" data-delay="300"
                                src="/front/assets/img/photos/sa9.jpg" srcset="/front/assets/img/photos/sa9@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                                data-delay="600" src="/front/assets/img/photos/sa10.jpg"
                                srcset="/front/assets/img/photos/sa10@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                        <div class="col-7">
                            <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900"
                                src="/front/assets/img/photos/sa11.jpg" srcset="/front/assets/img/photos/sa11@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-11" data-cue="fadeIn" data-delay="1200"
                                src="/front/assets/img/photos/sa12.jpg" srcset="/front/assets/img/photos/sa12@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5">We make spending stress free so you have the perfect control.</h3>
                    <p class="mb-5">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
                        fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac
                        cursus commodo.</p>
                    <div class="row gy-3">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-green mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit
                                        consectetur.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna
                                        mollis ornare aenean leo.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-green mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis
                                        nisl ornare.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus
                                        augue rutrum maecenas odio.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 position-relative">
                    <div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0"
                        style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                    </div>
                    <div class="row gx-md-5 gy-5 position-relative align-items-center">
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg d-flex ms-auto" data-cue="fadeIn" data-delay="300"
                                src="/front/assets/img/photos/sa13.jpg" srcset="/front/assets/img/photos/sa13@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900"
                                src="/front/assets/img/photos/sa14.jpg" srcset="/front/assets/img/photos/sa14@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                                src="/front/assets/img/photos/sa15.jpg" srcset="/front/assets/img/photos/sa15@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5">We bring solutions to manage your finance the way works best.</h3>
                    <p class="mb-5">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
                        fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac
                        cursus commodo.</p>
                    <div class="row gy-3">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit
                                        consectetur.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna
                                        mollis ornare aenean leo.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis
                                        nisl ornare.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus
                                        augue rutrum maecenas odio.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div> --}}
            <!--/.row -->
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                  <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
                  <h3 class="display-4 mb-10 px-xl-10">We offer a wide range of property reviews for potential homeowners and tenants, making us a leading property review agency.</h3>
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
              <div class="position-relative">
                <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
                <div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
                <div class="row gx-md-5 gy-5 text-center">
                  <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                      <div class="card-body">
                        <img src="/front/assets/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4>Landlord Review</h4>
                        <p class="mb-2">Kijii is a landlord and home review platform. Residents leave reviews about their living experiences on our platform. When you enter a new tenancy or take out a mortgage, you will usually sign a 6 to 12-month contract or a 35-year loan. You’re obligated to pay a substantial amount of money each month. Surely, it is important to have many viewpoints before taking this critical step.</p>
                        {{-- <a href="#" class="more hover link-yellow">Learn More</a> --}}
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                      <div class="card-body">
                        <img src="/front/assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4>Property Review</h4>
                        <p class="mb-2">We believe that one should have all information about a building before committing their finances. Let us help you make the right decision and the best one.</p>
                        {{-- <a href="#" class="more hover link-red">Learn More</a> --}}
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                      <div class="card-body">
                        <img src="/front/assets/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4>Real Estate Consultancy </h4>
                        <p class="mb-2">Let us give you the advice you need. We do not sugarcoat or lie to you because we believe that truth is the bedrock of any successful business.</p>
                        {{-- <a href="#" class="more hover link-green">Learn More</a> --}}
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                      <div class="card-body">
                        <img src="/front/assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                        <h4>Industry Directory</h4>
                        <p class="mb-2">We offer you an A-Z list of all the major developers in the UK. When you pick a developer, you will see their current developments, rating, and address. You're also allowed to update the directory with information about the developers you've worked with.</p>
                        {{-- <a href="#" class="more hover link-blue">Learn More</a> --}}
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
          <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7 order-lg-2">
              <figure><img class="w-auto" src="/front/assets/img/illustrations/3d6.png" srcset="/front/assets/img/illustrations/3d6@2x.png 2x" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
              <h3 class="display-4 mb-5">We provide real time information about properties in your desired location</h3>
              <p class="mb-6">At Kijii, we believe that the best information about a living area comes from the people there. We ask residents several questions about what it's like to live in the building. Our questions are based on design, facilities, landlord, management, and value. We also ask people to tell us the best features of the home.</p>
              {{-- <div class="row gy-3">
                <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare. Curabitur blandit.</span></li>
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare.</span></li>
                  </ul>
                </div>
                <!--/column -->
                <div class="col-xl-6">
                  <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis.</span></li>
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus vel augue rutrum.</span></li>
                  </ul>
                </div>
                <!--/column -->
              </div> --}}
              <!--/.row -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->

    <section class="wrapper bg-soft-primary">
        <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">
            <div class="row text-center" data-cue="slideInUp">
                {{-- <div class="col-lg-10 mx-auto">
                    <div class="mt-lg-n20 mt-xl-n22 position-relative">
                        <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1"
                            style="top: 1rem; left: -3.9rem;"></div>
                        <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1"
                            style="bottom: 2rem; right: -3rem;"></div>
                        <video poster="/front/assets/img/photos/movie.jpg" class="player" playsinline controls preload="none">
                            <source src="/front/assets/media/movie.mp4" type="video/mp4">
                            <source src="/front/assets/media/movie.webm" type="video/webm">
                        </video>
                    </div>
                </div> --}}
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row text-center mt-12">
                <div class="col-lg-9 mx-auto">
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Work With Our 3-Tier Review Process</h3>
                    <p>Have you ever wanted to move to a place, and you wished you had the superpower of knowing what the living experience of that place would feel like? Well, we at Kijii have made your wish possible. With our review process, you get to know. We use three methods for our review process.</p>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp"
                        data-group="process">
                        <div class="col-md-4"> <img src="/front/assets/img/icons/lineal/shield.svg"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">1. House Review</h4>
                            <p>You can review the house you want to move in anywhere in London. For instance, if you want to move to an area in Bristol, you can search for that location and apartment using our website. All information you need concerning the living conditions of that apartment will be made available to you. So, you don't need to pay and then find out when you can find out before you pay.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="/front/assets/img/icons/lineal/savings.svg"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">2. Landlord/Agent Review</h4>
                            <p>If you've never had a bad landlord, you won't understand why it is important to know your landlord before meeting them. A bad landlord can make your stay in an apartment very unpleasant. Bad landlords can also hide certain information about the house from you so that they can collect your money. At Kijii, we have, through the experiences of other people, get adequate information about the landlords of many houses in London.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="/front/assets/img/icons/lineal/loading.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">3. Neighborhood Review</h4>
                            <p>Some areas are unsafe, especially if you are raising kids or pets. Often, agents will intentionally refuse to disclose all the information about a neighborhood. We have reviewed many neighborhoods in London and have ranked them on our website according to their level of safety. On our website, you will see good areas for new couples, small families, large families, families with pets, single persons, families with senior citizens, and more.</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    {{-- <section class="wrapper bg-light">
        <div class="container py-14 py-md-17">
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 align-items-center">
                <div class="col-lg-7 position-relative">
                    <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1"
                        style="top: 0; left: -1.4rem; z-index: 0;"></div>
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6" data-cue="fadeIn">
                            <figure class="rounded mt-md-10 position-relative"><img src="/front/assets/img/photos/g5.jpg"
                                    srcset="/front/assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="row gx-md-5 gy-5">
                                <div class="col-md-12 order-md-2" data-cue="fadeIn" data-delay="900">
                                    <figure class="rounded"><img src="/front/assets/img/photos/g6.jpg"
                                            srcset="/front/assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                                </div>
                                <!--/column -->
                                <div class="col-md-10" data-cue="fadeIn" data-delay="300">
                                    <div class="card bg-pale-primary text-center">
                                        <div class="card-body py-11 counter-wrapper">
                                            <h3 class="counter text-nowrap">5000+</h3>
                                            <p class="mb-0">Satisfied Customers</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.card -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-5 mt-5">
                    <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote class="icon icon-top fs-lg text-center">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur.”</p>
                                        <div class="blockquote-details justify-content-center text-center">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Coriss Ambady</h5>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="icon icon-top fs-lg text-center">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur.”</p>
                                        <div class="blockquote-details justify-content-center text-center">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Cory Zamora</h5>
                                                <p class="mb-0">Marketing Specialist</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="icon icon-top fs-lg text-center">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur.”</p>
                                        <div class="blockquote-details justify-content-center text-center">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Nikolas Brooten</h5>
                                                <p class="mb-0">Sales Manager</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!--/.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="px-lg-5">
                <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
                    <div class="col-4 col-md-2">
                        <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/front/assets/img/brands/c1.png"
                                alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-4 col-md-2">
                        <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/front/assets/img/brands/c2.png"
                                alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-4 col-md-2">
                        <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/front/assets/img/brands/c3.png"
                                alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-4 col-md-2">
                        <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/front/assets/img/brands/c4.png"
                                alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-4 col-md-2">
                        <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/front/assets/img/brands/c5.png"
                                alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-4 col-md-2">
                        <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/front/assets/img/brands/c6.png"
                                alt="" /></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /div -->
        </div>
        <!-- /.container -->
    </section> --}}
    <!-- /section -->
    {{-- <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
          <h2 class="display-4 mb-3">How We Do It?</h2>
          <p class="lead fs-lg mb-8">We make your spending <span class="underline">stress-free</span> for you to have the perfect control.</p>
          <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
            <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">01</span></span>
              <h4 class="mb-1">Concept</h4>
              <p class="mb-0">Nulla vitae elit libero elit non porta gravida eget metus cras. Aenean eu leo quam. Pellentesque ornare.</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4"><span class="number">02</span></span>
              <h4 class="mb-1">Prepare</h4>
              <p class="mb-0">Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">03</span></span>
              <h4 class="mb-1">Retouch</h4>
              <p class="mb-0">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero.</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">04</span></span>
              <h4 class="mb-1">Finalize</h4>
              <p class="mb-0">Integer posuere erat, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
    </section> --}}
      <!-- /section -->
    <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map"
        data-image-src="/front/assets/img/map.png">
        <div class="container pt-0 pb-14 pt-md-18 pb-md-18">
            <div class="row">
                <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                    <h3 class="display-4 mb-8 px-lg-12">We are trusted by over 5000+ clients. Join them now.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join">
                <span><a href="{{ route('contactUs') }}" class="btn btn-primary rounded mx-1">Get Started</a></span>
                {{-- <span><a class="btn btn-green rounded mx-1">Free Trial</a></span> --}}
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@stop
