@extends('layouts.app')

@section('content')

<div class="slideshow">
    <div id="demo" class="carousel slide">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://dancingastronaut.com/wp-content/uploads/2016/12/Westworld-series-art.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="https://dancingastronaut.com/wp-content/uploads/2016/12/Westworld-series-art.jpg" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="https://dancingastronaut.com/wp-content/uploads/2016/12/Westworld-series-art.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</div>
<div id="listView">
    <br>
    <br>
    <div class="container title">
        <a href="{{url('/categories')}}" class="row">
            <h2>In Theaters </h2>
            <h4 class="px-2 py-1"><i class="fa fa-chevron-right"></i></h4>
            </a>
        <br>
    </div>
    <div class="main-content">
        <div class="owl-carousel owl-theme">
            @for($i = 0; $i<10; $i++)
                <div class="item p-2">
                    <div class="movie-poster movie-poster-slider ">
                        <div>
                            <a href="{{url('movie/1')}}" class="poster-link">
                            <div class="poster-image">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/61uw1CpRLlL._SL1500_.jpg" title="Movie Details" class="img-responsive rounded" alt=" " />
                                <span class="card__play">
                                    <i class="icon-play fa fa-play"></i>
                                </span>
                            </div>
                        </a>
                        </div>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6 class="text-white"><a href="{{url('movie/1')}}">Red Sparrow</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home row">
                                <div class="col"><p class="text-secondary">2016</p></div>
                                <div class="col"><p style="color: #FBCE00"><i class="fa fa-star"></i> 4.5</p></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

            @endfor
        </div>
        <div class="owl-theme">
            <div class="owl-controls">
                <div class="custom-nav owl-nav"></div>
            </div>
        </div>
    </div>

</div>
<div id="listView2">
    <br>
    <br>
    <div class="container title">
        <a href="{{url('/categories')}}" class="row">
            <h2>Box Office</h2>
            <h4 class="px-2 py-1"><i class="fa fa-chevron-right"></i></h4>
        </a>
        <br>
    </div>
    <div class="main-content">
        <div class="owl-carousel owl-theme">
            @for($i = 0; $i<10; $i++)
                <div class="item p-2">
                    <div class="movie-poster movie-poster-slider ">
                        <div>
                            <a href="{{url('movie/1')}}" class="poster-link">
                                <div class="poster-image">
                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/bd/Tomb_Raider_%282018_film%29.png" title="Movie Details" class="img-responsive rounded" alt=" " />
                                    <span class="card__play">
                                    <i class="icon-play fa fa-play"></i>
                                </span>
                                </div>
                            </a>
                        </div>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6 class="text-white"><a href="{{url('movie/1')}}">Tomb Raider</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home row">
                                <div class="col"><p class="text-secondary">2018</p></div>
                                <div class="col"><p style="color: #FBCE00"><i class="fa fa-star"></i> 4.2</p></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="owl-theme">
            <div class="owl-controls">
                <div class="custom-nav owl-nav"></div>
            </div>
        </div>
    </div>

</div>
<div id="listView3">
    <br>
    <br>
    <div class="container title">
        <a href="{{url('/categories')}}" class="row">
            <h2>Trending</h2>
            <h4 class="px-2 py-1"><i class="fa fa-chevron-right"></i></h4>
        </a>
        <br>
    </div>
    <div class="main-content">
        <div class="owl-carousel owl-theme">
            @for($i = 0; $i<3; $i++)
                <div class="item p-2">
                    <div class="movie-poster movie-poster-slider ">
                        <div>
                            <a href="{{url('movie/1')}}" class="poster-link">
                                <div class="poster-image">
                                    <img src="https://mediad.publicbroadcasting.net/p/ketr/files/styles/x_large/public/202001/1917_movie.jpg" title="Movie Details" class="img-responsive rounded" alt=" " />
                                    <span class="card__play">
                                    <i class="icon-play fa fa-play"></i>
                                </span>
                                </div>
                            </a>
                        </div>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6 class="text-white"><a href="{{url('movie/1')}}">1917</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home row">
                                <div class="col"><p class="text-secondary">2019</p></div>
                                <div class="col"><p style="color: #FBCE00"><i class="fa fa-star"></i> 4.5</p></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="owl-theme">
            <div class="owl-controls">
                <div class="custom-nav owl-nav"></div>
            </div>
        </div>
    </div>

</div>
<div class="categories">
    <div class="container title">
        <br>
        <br>
            <a href="{{url('/categories')}}" class="row">
                <h2>Categories</h2>
                <h4 class="px-2 py-1"><i class="fa fa-chevron-right"></i></h4>
            </a>
            <br>
        <div class="row">
            @for($i = 0; $i<4; $i++)
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
                    <div class="card bg-transparent border-0">
                        <div class="card-body text-center p-0 border-0">
                            <div class="movie-poster movie-poster-slider ">
                                <a href="{{url('categories/1/details')}}" class="poster-link">
                                    <img src="https://i.redd.it/bzlkyuvowmq31.jpg" title="Movie Details" class="img-responsive rounded" alt=" " />
                                </a>
                            </div>
                            <h1>Action</h1>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
<div id="gridView">
    <br>
    <br>
    <div class="container title">
        <a href="{{url('/categories')}}" class="row">
            <h2>Recently Added</h2>
            <h4 class="px-2 py-1"><i class="fa fa-chevron-right"></i></h4>
        </a>
        <br>
    </div>
    <div class="container">
        <div class="row">
        @for($i = 0; $i<12; $i++)
            <!-- movie widget -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="item">
                        <div class="movie-poster movie-poster-slider ">
                            <div>
                                <a href="{{url('movie/1')}}" class="poster-link">
                                    <div class="poster-image">
                                        <img src="https://images-na.ssl-images-amazon.com/images/I/5147eEnFCYL.jpg" title="Movie Details" class="img-responsive rounded" alt=" " />
                                        <span class="card__play">
                                    <i class="icon-play fa fa-play"></i>
                                </span>
                                    </div>
                                </a>
                            </div>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6 class="text-white"><a href="{{url('movie/1')}}">Christopher Robin</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home row">
                                    <div class="col"><p class="text-secondary">2018</p></div>
                                    <div class="col"><p style="color: #FBCE00"><i class="fa fa-star"></i> 4.5</p></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end movie widget -->
            @endfor
        </div>
    </div>
</div>
<div id="listView4">
    <br>
    <br>
    <div class="container title">
        <a href="{{url('/categories')}}" class="row">
            <h2>Most Popular</h2>
            <h4 class="px-2 py-1"><i class="fa fa-chevron-right"></i></h4>
        </a>
        <br>
    </div>
    <div class="main-content">
        <div class="owl-carousel owl-theme">
            @for($i = 0; $i<3; $i++)
                <div class="item p-2">
                    <div class="movie-poster movie-poster-slider ">
                        <div>
                            <a href="{{url('movie/1')}}" class="poster-link">
                                <div class="poster-image">
                                    <img src="https://lumiere-a.akamaihd.net/v1/images/p_onward_19024_dbb512d5.jpeg?region=0,0,540,810" title="Movie Details" class="img-responsive rounded" alt=" " />
                                    <span class="card__play">
                                    <i class="icon-play fa fa-play"></i>
                                </span>
                                </div>
                            </a>
                        </div>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6 class="text-white"><a href="{{url('movie/1')}}">Onward</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home row">
                                <div class="col"><p class="text-secondary">2020</p></div>
                                <div class="col"><p style="color: #FBCE00"><i class="fa fa-star"></i> 4.5</p></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="owl-theme">
            <div class="owl-controls">
                <div class="custom-nav owl-nav"></div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

    <!-- Owl Carousel-->
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script>
        $("#listView .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: true,
            dots:false,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',

            navText: [
                '<div class="col"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="col"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
            ],
            navContainer: '#listView .main-content .custom-nav',
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 6
                }
            }
        });
        $("#listView2 .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: true,
            dots:false,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',

            navText: [
                '<div class="col"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="col"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
            ],
            navContainer: '#listView2 .main-content .custom-nav',
            responsive:{
                0:{
                    items: 2
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 6
                }
            }
        });
        $("#listView3 .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: false,
            margin: 10,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 3
                }
            }
        });
        $("#listView4 .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: true,
            dots:false,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',

            navText: [
                '<div class="col"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="col"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
            ],
            navContainer: '#listView4 .main-content .custom-nav',
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 6
                }
            }
        });
    </script>
@endsection
