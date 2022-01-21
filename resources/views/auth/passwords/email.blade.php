@extends('layouts.master')

@section('content')

<div class="container" style="    margin-bottom: 150px;">
    <div class="form-column col-lg-12 col-md-12 col-sm-12">
        <div class="inner-column">
            <div class="contact-form">
               
                <div class="card-body">
                    <center>
                          <h2>{{ __('Reset Password') }}</h1>
 <p>Si vous ne parvenez pas à vous connecter à l’aide du mot de passe associé à votre identifiant, veuillez indiquer votre email pour le réinitialiser et rétablir l’accès à votre compte  <label style="color:#a9d9db">Mosta9bali</label>.</p>
                                <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                               
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-one">
                                                                     <span class="txt"> {{ __('Send Password Reset Link') }}</span>

                                   
                                </button>
                        </div>
                    </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
