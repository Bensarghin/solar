

@extends('layouts.master')

@section('content')

<section class="page-title" style="background-image:url({{asset('assset/images/background/22.png')}});">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>{{__('layout.connexion')}}</h1>
                        <a href="{{route('register')}}" class="text-light">Nouveau Connexion</a>
                       
                    </div>
                </div>
            </div>
        </section>
<div class="container" style="    margin-bottom: 200px;">
    <div class="form-column col-lg-12 col-md-12 col-sm-12">
        <div class="inner-column">
            <div class="contact-form">
                <div class="card-body">
                    <center>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('auth.email') }}</label>

                          
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('auth.psw') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-lg- col-md-12 col-sm-12"> 
                            
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">

                                <button type="submit" class="theme-btn btn-style-one">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('auth.forget-psw') }}
                                    </a>
                                @endif
                           
                        </div>
                    </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

