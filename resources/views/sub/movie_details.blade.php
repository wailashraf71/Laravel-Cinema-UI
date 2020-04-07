@extends('layouts.app')

@section('content')
    <div class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="py-lg-5 px-1 py-3">
                            <img src="https://pbs.twimg.com/media/D-kP48xWkAA6WzW.jpg" title="Movie Details" class="img-responsive rounded" alt=" " />
                        <a href="{{url('movie/1/play')}}" id="play-video" class="video-play-button" href="#">
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="py-lg-5 p-3">
                        <h2>La casa de papel</h2>
                        <br>
                        <h5>Drama, Crime</h5>
                        <h5>2017</h5>
                        <h5>3h 30m</h5>
                        <h5 style="color: #FBCE00"><i class="fa fa-star"></i> 4.3</h5>
                        <br>
                        <p>A criminal mastermind who goes by "The Professor" has a plan to pull off the biggest heist in recorded history -- to print billions of euros in the Royal Mint of Spain. To help him carry out the ambitious plan, he recruits eight people with certain abilities and who have nothing to lose.</p>
                        <br>
                        <h5>Director: Álex Pina</h5>

                    </div>
                </div>

            </div>
        </div>
            <div id="listView">
                <br>
                <br>
                <div class="container title">
                    <a href="{{url('/categories')}}" class="row">
                        <h2>Relevant </h2>
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
    </div>
@endsection

@section('scripts')
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
    </script>
@endsection
