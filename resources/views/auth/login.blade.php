@extends('layouts.auth')

@section('content')
    <div class="sign section--bg" style="background-image: url({{asset('images/login.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- authorization form -->
                        <form action="#" class="sign__form">
                            <h1 class="p-2">
                                {{ __('tr.Login') }}
                            </h1>
                            <br>
                            <div class="sign__group">
                                <input type="text" class="sign__input" placeholder="{{ __('tr.hintEmail') }}">
                            </div>

                            <div class="sign__group">
                                <input type="password" class="sign__input" placeholder="{{ __('tr.hintPassword') }}">
                            </div>

                            <div class="sign__group sign__group--checkbox">
                                <input id="remember" name="remember" type="checkbox" checked="checked">
                                <label for="remember">{{ __('tr.Remember me') }}</label>
                            </div>
                            <button class="sign__btn" type="button">{{ __('tr.Sign In') }}</button>

                            <span class="sign__text"><a href="#">{{ __('tr.Forgot Password?') }}</a></span>
                        </form>
                        <!-- end authorization form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
