@extends('layouts.app')

@section('content')

    <!-- filter -->
    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter__content">
                        <div class="filter__items">
                            <!-- filter item -->
                            <div class="filter__item" id="filter__quality">
                                <span class="filter__item-label">QUALITY:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="HD 1080">
                                    <span></span>
                                </div>

                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
                                    <li>HD 1080</li>
                                    <li>HD 720</li>
                                    <li>DVD</li>
                                    <li>TS</li>
                                </ul>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__rate">
                                <span class="filter__item-label">RATE:</span>

                                <div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="All">

                                    <span></span>
                                    <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
                                        <li>All</li>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                    </ul>
                                </div>

                                <div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
                                    <div id="filter__imbd"></div>
                                </div>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__year">
                                <span class="filter__item-label">RELEASE YEAR:</span>

                                <div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="All">

                                    <span></span>
                                    <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
                                        <li>All</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                        <li>2020</li>
                                    </ul>
                                </div>

                                <div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
                                    <div id="filter__years"></div>
                                </div>
                            </div>
                            <!-- end filter item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end filter -->

    <!-- catalog -->
    <div class="catalog">
        <div class="container">
            <div class="row">
            @for($i = 0; $i<11; $i++)
                    <!-- movie widget -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="movie-poster movie-poster-slider ">
                                <a href="{{url('movie/1')}}" class="poster-link">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61uw1CpRLlL._SL1500_.jpg" title="Category Details" class="img-responsive rounded" alt=" " />
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
                        </div>                </div>
                    <!-- end movie widget -->

            @endfor
                <!-- paginator -->
                <div class="col-12">
                    <ul class="paginator">
                        <li class="paginator__item paginator__item--prev">
                            <a href="#"><i class="fa fa-chevron-left"></i></a>
                        </li>
                        <li class="paginator__item"><a href="#">1</a></li>
                        <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                        <li class="paginator__item"><a href="#">3</a></li>
                        <li class="paginator__item"><a href="#">4</a></li>
                        <li class="paginator__item paginator__item--next">
                            <a href="#"><i class="fa fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- end paginator -->
            </div>
        </div>
    </div>
    <!-- end catalog -->

@endsection

@section('scripts')

@endsection
