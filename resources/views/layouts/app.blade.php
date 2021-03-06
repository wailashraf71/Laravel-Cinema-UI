<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema website UI</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link type="text/css" href="{{asset('css/style.css')}}" media="all" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{asset('css/owl.carousel.min.css')}}" type="text/css" media="all" rel="stylesheet" />

</head>
<body>

<!-- Header -->
<header class="header">
    <div class="header__wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="{{url('/')}}" class="header__logo">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                        <!-- end header logo -->

                        <!-- header nav -->
                        <ul class="header__nav">
                            <!-- dropdown -->
                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'index' ? 'nav_active' : null }}" href="{{url('index')}}" role="button">Movies</a>
                            </li>
                            <!-- end dropdown -->

                            <!-- dropdown -->
                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'tv' ? 'nav_active' : null }}" href="{{url('tv')}}" role="button">TV</a>

                            </li>
                            <!-- end dropdown -->

                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'places' ? 'nav_active' : null }}" href="{{url('places')}}" role="button">Places</a>
                            </li>
                        </ul>


                        <!-- header auth -->
                        <div class="header__auth px-lg-5">
                            <li class="px-4">
                                <button class="header__search-btn" type="button">
                                    <i class="icon fa fa-search"></i>
                                </button>
                            </li>
                            <li class="dropdown open">
                                <button class="dropdown-toggle header__bell-btn" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i></button>
                                <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                    @for($i = 0; $i<3; $i++)
                                        <li>
                                        <div class="row">
                                            <div class="col-2">
                                                <span class="bg-primary rounded-circle p-1 text-center" style="width: 30px; height: 30px"><i class="fa fa-bell text-white"></i></span>
                                            </div>
                                            <div class="col text-white">
                                                <h4>Did you pay your bill?</h4>
                                                <p style="font-size: small; opacity: 0.4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis earum ex iure minima modi nihil quibusdam quidem quo reiciendis repellat repellendus sed sunt, tempore? Et laboriosam nihil nobis ratione velit?</p>
                                            </div>
                                        </div>
                                            <hr>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
{{--                            <li class="dropdown header__nav-item open">--}}
{{--                                <button class="header__search-btn" type="button">--}}
{{--                                    <i class="icon fa fa-user"></i>--}}
{{--                                </button>--}}
{{--                            </li>--}}
                            <a href="{{url('login')}}" class="header__sign-in">
                                <i class="icon fa fa-sign-in-alt m-2"></i>
                                <span>sign in</span>
                            </a>
                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header search -->
    <form action="#" class="header__search">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__search-content">
                        <label>
                            <input type="text" placeholder="Search for a movie, TV Series that you are looking for">
                        </label>

                        <button type="button">search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end header search -->
</header>
<!-- /Header -->


<!-- Content -->
<div class="content">
    @yield('content')

</div>
<!-- /Content -->


<!-- Site footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- footer list -->
            <div class="col-12 col-md-3">
                <h6 class="footer__title">Download Our App</h6>
                <ul class="footer__app">
                    <li><a href="#"><img src="{{asset('images/Download_on_the_App_Store_Badge.png')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('images/google-play-badge.png')}}" alt=""></a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Watch More</h6>
                <ul class="footer__list">
                    <li><a href="{{url('/tv')}}">TV</a></li>
                    <li><a href="{{url('/places')}}">Places</a></li>
                    <li><a href="{{url('/categories')}}">Movies Categories</a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Legal</h6>
                <ul class="footer__list">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-12 col-sm-4 col-md-3">
                <h6 class="footer__title">Contact</h6>
                <ul class="footer__list">
                    <li><a href="tel:+9647701234567">0770-123-4567</a></li>
                    <li><a href="mailto:email@example.com">email@example.com</a></li>
                </ul>
                <ul class="footer__social">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <!-- end footer list -->
            <div class="col-12">
                <div class="footer__copyright">
                    <small><a target="_blank" href="https://github.com/wailashraf71">Designed by <h4>Wail Hayaly</h4></a></small>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Site footer -->

<!-- Scripts -->
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
<!--Jquery -->
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


@yield('scripts')

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- /Scripts -->

</body>
</html>
