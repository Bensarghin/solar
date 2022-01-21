






@extends('layouts.master')

@section('content')



<div class="container" style="    margin-bottom: 150px;">
    <div class="form-column col-lg-12 col-md-12 col-sm-12">
        <div class="inner-column">
            <div class="contact-form">
               
                <div class="card-body">
                    <center>

                <div class="card-body">

                <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">

                                <button type="submit" class="theme-btn btn-style-one">
                                 <span class="txt">{{ __('Reset Password') }}</span>
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

