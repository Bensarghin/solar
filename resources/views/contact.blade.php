@extends('layouts.master')
@section('content')

<section class="page-title" style="background-image:url({{asset('assset/images/background/22.png')}});">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Contact Us</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-page-section">
            <div class="auto-container">
                <div class="row">
                    <div class="form-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title text-center">
                                <h2>N'hésitez pas à contacter
                                avec <br> nous maintenant</h2>
                            </div>
                            <div class="contact-form">
                                {!! Form::open(['route'=>'contact.submit'])!!}
                                @if(Session::has('message'))
                    <div class="alert alert-success">
                    {{Session('message')}}
                    </div>
                    @endif
                                <form>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="name" placeholder="Name" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <input type="email" name="email" placeholder="Email" required=""></div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12"><textarea name="message" placeholder="Massage"></textarea></div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text"> <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit</span></button></div>
                                </div>
                                </form>
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                 
                    <div class="contact-column col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-info">
                            <div class="row">
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <div class="icon-box"> <i class="flaticon flaticon-stopwatch"></i></div>
                                        <div class="text-box">
                                            <h4>Time</h4>
                                            <p>10:00am to 6:00pm <br>Sunday Closed</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <div class="icon-box"> <i class="flaticon flaticon-pin"></i></div>
                                        <div class="text-box">
                                            <h4>Location</h4>
                                            <p>....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <div class="icon-box"> <i class="flaticon flaticon-call"></i></div>
                                        <div class="text-box">
                                            <h4>Email / Phone</h4>
                                            <p>+212 .....</p>
                                            <p><a href="#">mail@example.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        @endsection
