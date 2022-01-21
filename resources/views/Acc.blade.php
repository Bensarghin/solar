@extends('layouts.master')


@section('content')

    <div class="form-back-drop"></div>
        <section class="banner-section style-three">
<!--
            <div class="pattern-layer-two" style="background-image: url(images/main-banner/banner-icon-5.png)"></div>
            <div class="pattern-layer-seven" style="background-image: url(images/main-banner/banner-icon-8.png)"></div>
            <div class="pattern-layer-eight" style="background-image: url(images/main-banner/banner-icon-7.png)"></div>
            <div class="pattern-layer-nine" style="background-image: url(images/main-banner/banner-icon-10.png)"></div>
            <div class="pattern-layer-ten" style="background-image: url(images/main-banner/banner-icon-9.png)"></div>
            <div class="pattern-layer-eleven" style="background-image: url(images/main-banner/banner-icon-3.png)"></div>
            <div class="pattern-layer-tweleve" style="background-image: url(images/main-banner/banner-icon-4.png)"></div>
-->

            <div class="container-fluid">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="content-inner">
<div class="video-link"> <a href="https://www.youtube.com/watch?v=FQYFflM0IH4" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play" aria-hidden="true"></span><i class="ripple"></i></a></div>
                            <h1>{{__('messages.mosta')}}</h1>
                            <p>{{ __('messages.mos') }}</p>
                            <form class="analysis-form" method="post" action="{{route('subscribe.store')}}">
                                @csrf
                                <div class="form-group"> 
                                    <input type="email" name="email" value="" placeholder="exemple@gmail.com" required> 
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <button type="submit" class="theme-btn btn-style-one buy-btn"><span class="txt">s'abonner</span></button>
                                </div>
                                    </form>
                                    <div class="info-box">
                                        <div class="icon-box"> <i class="flaticon flaticon-communication"></i></div>
                                        <div class="text-box">
                                            <h4>+(212)....</h4>
                                            <p>Info@Company.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="image-box parallax-scene-2">
                                                                        <div class="image" data-depth="0.30"> <img src="{{asset('assset/images/main-banner/18.png')}}" alt="Main Banner"></div>

                                    <!---
                                    <div class="banner-image" data-depth="0.30"> <img src="images/main-banner/21.png" alt="Banner Image"></div>
                                    <div class="banner-image-2" data-depth="0.40"> <img src="images/main-banner/22.png" alt="Banner Image 2"></div>
                                    <div class="banner-image-3" data-depth="0.50"> <img src="images/main-banner/23.png" alt="Banner Image 3"></div>
                                    <div class="banner-image-4" data-depth="0.60"> <img src="images/main-banner/24.png" alt="Banner Image 4"></div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>


                    <div id="chatbutton-wa" data-phone="+212634271176" data-showpopup="true" data-headertitle="Musta9bali 👋" data-popupmessage="Salut, 😊 comment puis-je vous aider" data-placeholder="Type here" data-position="left" data-headercolor="rgb(25 53 87)" data-backgroundcolor="#e5ddd5" data-autoopentimeout="5" data-size="65px">
    <div class="floating-wpp-button" style="width: 65px; height: 65px;">
        <div class="floating-wpp-button-image">
                <img src="{{asset('assset/images/whatsapp-logo-4.png')}}" alt="">
                
    </div>
    </div>
</div>
                    <section class="services-section style-four">
                        <div class="upper-box">
                            <div class="auto-container">
                                <div class="sec-title text-center">
                                    <h2>{{__('messages.nos-abonnement')}}<br /> </h2>
                                       <h6 class="subtitle">{{__('messages.orient')}}</h6>

                                </div>
                            </div>
                        </div>
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="service-block-four wow fadeInUp" data-wow-delay="0ms" data-wow-duration="0ms">
                                        <div class="inner-box">


                                       <div class="back-box" >
                                                <div class="icon-box"> <i class="">SN</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="{{route('pack.normal')}}">Abonnement Sciences Normal</a></h4>
                                                        <p>Pour Bac: PC-SM-SV</p>
                                                        <p>......</p>
                                                </div>
                                            </div>

                                            <div class="front-box" style="background-image: url({{asset('assset/images/services/14.png')}});" >
                                                <div class="icon-box"> <i class="">SN</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="{{route('pack.normal')}}">Abonnement Sciences Normal</a></h4>
                                                    <p>Pour Bac: PC-SM-SV</p>
                                                        <p>......</p>

                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="service-block-four wow fadeInUp" data-wow-delay="300ms" data-wow-duration="300ms">
                                        <div class="inner-box">




                                            <div class="front-box" style="background-image: url({{asset('assset/images/services/14.png')}});">
                                                <div class="icon-box"> <i class="">SP</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="">Abonnement Sciences plus</a> </h4>
                                                            <p>Pour Bac: PC-SM-SV</p>
                                                            <p>......</p>
                                                </div>
                                            </div>
                                            <div class="back-box" >
                                                <div class="icon-box"> <i class="">SP</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="">Abonnement Sciences Plus</a></h4>
                                                            <p>Pour Bac: PC-SM-SV</p>
                                                            <p>......</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="service-block-four wow fadeInUp" data-wow-delay="600ms" data-wow-duration="600ms">
                                        <div class="inner-box">



                                            <div class="front-box" style="background-image: url({{asset('assset/images/services/56.png')}});">
                                                <div class="icon-box"> <i class="">ETL</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="">Abonnement Eco,Tech et Lettres</a></h4>
                                                    <p>Pour Bac:ECO-STE-STM-L-SH</p>
                                                      <p>......</p>

                                                </div>
                                            </div>
                                            <div class="back-box" >
                                                <div class="icon-box"> <i class="">ETL</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="">Abonnement Eco,Tech et Lettres</a></h4>
                                                    <p>Pour Bac:ECO-STE-STM-L-SH</p>
                                                    <p>......</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="service-block-four wow fadeInUp" data-wow-delay="900ms" data-wow-duration="900ms">
                                        <div class="inner-box">




                                            <div class="front-box" style="background-image: url({{asset('assset/images/services/56.png')}});">
                                                <div class="icon-box"> <i class="">EP</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="">Abonnement Economie Plus</a></h4>
                                                    <p>Pour Bac: ECO-SGC</p>
                                                    <p>......</p>
                                                </div>
                                            </div>
                                            <div class="back-box" >
                                                <div class="icon-box"> <i class="">EP</i></div>
                                                <div class="lower-content">
                                                    <h4><a href="">Abonnement Economie Plust</a></h4>
                                                    <p>Pour Bac: ECO-SGC</p>
                                                    <p>......</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
 


              <!--
                    <section class="get-started-form">
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12">
                                    <div class="form-area wow fadeInDown" data-wow-delay="100ms" data-wow-duration="100ms">
                                        <form method="post" action="https://expert-themes.com/html/Musta9bali/blog.html">
                                            <div class="form-group"> <input type="text" name="getstarted" placeholder="Contact with us now to wanted service for your website now"> <button type="submit" class="theme-btn btn-style-one buy-btn"><span class="txt">Get Started</span></button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="experince-sec">


                        <div class="pattern-layer-tweleve" style="background-image: url(images/main-banner/banner-icon-4.png)"></div>



                        <div class="auto-container">
                            <div class="row">
                                <div class="image-column col-lg-4 col-md-6 col-sm-12">
                                    <div class="image-box parallax-scene-1 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="100ms">
                                        <div class="image" data-depth="0.30"> <img src="images/resource/experince.png" alt=""></div>
                                        <div class="review-box" data-depth="0.60">
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <h6>SEO Agency <br />Of The Years</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="300ms">
                                        <div class="sec-title">
                                            <h6 class="subtitle">Experience Shear With Your</h6>
                                            <h2>Discuss projects, Share ideas and get work done</h2>
                                        </div>
                                        <p>Musta9bali Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehender it in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Get Started</span></a>
                                    </div>
                                </div>
                                <div class="box-cloummn col-lg-4 col-md-12 col-sm-12">
                                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="500ms">
                                        <div class="audience-box">
                                            <h5>Online / Audiences</h5>
                                            <p>Grursus mal suada faci lisis Lorem at more dummy consectetur elit.</p> <a href="#" class="learnmore">Learn More</a></div>
                                        <div class="audience-box">
                                            <h5>Social shares & reviews</h5>
                                            <p>Grursus mal suada faci lisis Lorem at more dummy consectetur elit.</p> <a href="#" class="learnmore">Learn More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="contact-section">

                        <div class="pattern-layer-two" style="background-image: url(images/main-banner/banner-icon-5.png)"></div>




                        <div class="pattern-layer-seven" style="background-image: url(images/main-banner/banner-icon-8.png)"></div>
                        <div class="pattern-layer-eight" style="background-image: url(images/main-banner/banner-icon-7.png)"></div>
                        <div class="pattern-layer-nine" style="background-image: url(images/main-banner/banner-icon-10.png)"></div>
                        <div class="pattern-layer-ten" style="background-image: url(images/main-banner/banner-icon-9.png)"></div>
                        <div class="pattern-layer-eleven" style="background-image: url(images/main-banner/banner-icon-3.png)"></div>
                        <div class="pattern-layer-tweleve" style="background-image: url(images/main-banner/banner-icon-4.png)"></div>
                        <div class="auto-container">
                            <div class="row">
                                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="sec-title text-left">
                                            <h6 class="subtitle">Get in Touch</h6>
                                            <h2>Get Free SEO Analysis?</h2>
                                        </div>
                                        <div class="contact-form">
                                            <form method="post" action="https://expert-themes.com/html/Musta9bali/blog.html">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group"> <input type="text" name="username" placeholder="Name" required></div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group"> <input type="email" name="email" placeholder="Email" required></div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group"> <input type="url" name="website" placeholder="Your Website" required></div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group"><textarea name="message" placeholder="Massage"></textarea></div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group text-left"> <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Send Now</span></button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-column col-lg-6 col-md-12 text-right">
                                    <div class="image-box parallax-scene-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="100ms">
                                        <div class="image" data-depth="0.30"> <img src="images/resource/contact-1.png" alt="Contact Image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


-->
@endsection
                  