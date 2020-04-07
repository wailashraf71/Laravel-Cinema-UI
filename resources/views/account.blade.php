@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="container">
            <div class="col py-5">
                <!-- account profile -->
                <div class="col-12 col-md-6 col-lg-6 m-auto">
                    <div class="account profile--info">
                        <div class="account__item account__item--first"><span>Profile</span> <span><button>Logout</button></span></div>
                        <div class="account__item"><span>John Doe</span></div>
                        <div class="account__item"><span>email@example.com</span></div>
                    </div>
                </div>
                <!-- end profile -->

                <!-- account subscription-->
                <div class="col-12 col-md-6 col-lg-6 m-auto">
                    <div class="account ">
                        <div class="account__item account__item--first"><span>Subscription</span> <span></span></div>
                        <div class="account__item"><span>Month:</span><span>February</span></div>
                        <div class="account__item"><span>Type:</span><span>Standard</span></div>
                        <div class="account__item"><span>Started at:</span><span>29 April 2020</span></div>
                        <div class="account__item"><span>Ending time:</span><span>29 May 2020</span></div>
                        <a href="#" class="payed__btn">Payed</a>
                    </div>
                </div>
                <!-- end subscription -->

            </div>
        </div>
    </div>
@endsection
