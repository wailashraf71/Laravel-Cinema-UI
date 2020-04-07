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
                            <div class="filter__item" id="filter__genre">
                                <span class="filter__item-label">LANGUAGE:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="English">
                                    <span></span>
                                </div>

                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                                    <li>Arabic</li>
                                    <li>English</li>
                                </ul>
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
            <div class="row card-list">
                @for($i = 0; $i<10; $i++)
                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
                        <div class="card bg-transparent border-0">
                            <div class="card-body text-center p-0 border-0">
                                <div class="movie-poster movie-poster-slider ">
                                    <a href="{{url('categories/1/details')}}" class="poster-link">
                                        <img src="https://i.redd.it/bzlkyuvowmq31.jpg" title="Category Details" class="img-responsive rounded" alt=" " />
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
    <!-- end catalog -->

@endsection

@section('scripts')

@endsection
