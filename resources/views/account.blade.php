@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="container">
            <div class="col py-5">
                <!-- account profile -->
                <div class="col-12 col-md-6 col-lg-6 m-auto">
                    <div class="account profile--info">
                        <div class="account__item account__item--first"><span>{{ __('tr.Profile') }}</span><button class="btn btn-outline-danger">{{ __('tr.Logout') }}</button></div>
                        <div class="account__item"><span>{{ __('tr.John Doe') }}</span></div>
                        <div class="account__item"><span>email@example.com</span></div>
                    </div>
                </div>
                <!-- end profile -->

                <!-- account subscription-->
                <div class="col-12 col-md-6 col-lg-6 m-auto">
                    <div class="account ">
                        <div class="account__item account__item--first"><span>{{ __('tr.Subscription') }}</span> <span></span></div>
                        <div class="account__item"><span>{{ __('tr.Month') }}:</span><span>{{ __('tr.February') }}</span></div>
                        <div class="account__item"><span>{{ __('tr.Type') }}:</span><span>{{ __('tr.Standard') }}</span></div>
                        <div class="account__item"><span>{{ __('tr.Started at') }}:</span><span>{{ __('tr.29 March 2020') }}</span></div>
                        <div class="account__item"><span>{{ __('tr.Ending date') }}:</span><span>{{ __('tr.29 April 2020') }}</span></div>
                        <a href="#" class="payed__btn">{{ __('tr.Payed') }}</a>
                    </div>
                </div>
                <!-- end subscription -->

            </div>
        </div>
    </div>
@endsection
