@extends('layouts.app')

@section('content')

    <div class="play p-2">
        <div class="my-lg-5 container">
            <div class="m-auto bg-secondary rounded" style="height: 50%">
                <!-- Plyr -->
                <video poster="/path/to/poster.jpg" id="player" playsinline controls>
                    <source src="https://file-examples.com/wp-content/uploads/2017/04/file_example_MP4_480_1_5MG.mp4" type="video/mp4" />

                    <!-- Captions are optional -->
                    <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                </video>
            </div>
        </div>
    </div>
    <br>
    <div class="main-content">
        <div class="container widgetHeader"><h1>Relevant</h1></div>
        <br>
        <div class="owl-carousel owl-theme">
            @for($i = 0; $i<10; $i++)
                <div class="item p-2">
                    <div class="movie-poster movie-poster-slider ">
                        <a href="{{url('movie/1')}}" class="poster-link">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61uw1CpRLlL._SL1500_.jpg" title="Movie Details" class="img-responsive rounded" alt=" " />
                        </a>
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

@endsection

@section('scripts')

    <!-- Owl Carousel-->
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.10/plyr.min.js"></script>

    <script>
        const player = new Plyr('#player');
    </script>
    <script>
        $(".main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: true,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText: [
                '<div class="col"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="col"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
            ],
            navContainer: '.main-content .custom-nav',
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
