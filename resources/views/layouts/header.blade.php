
        <header class="main-header header-style-three">
            <div class="container-fluid">
                <div class="row">
                    <div class="top-header">
                        <div class="left-header-area">
                            <ul class="contact-area">
                                <li>Call: +212</li>
                                <li><span class="far fa-paper-plane"></span> Adresse</li>
                                <li><span class="far fa-envelope"></span> <a href="mailto:Musta9bali.seo@mail.com">Musta9bali@mail.com</a></li>
                            </ul>
                        </div>
                        <div class="right-header-area">
                            <ul class="social-links">  
                                <li>
                                 
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="header-lower">
                        <div class="main-box clearfix">
                            <div class="logo-box">
                                <div class="logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('assset/images/logo.png')}}" alt="" title=""></a>
                                </div>
                            </div>
                            <div class="nav-outer clearfix">
                                <div class="mobile-nav-toggler"><span class="icon flaticon flaticon-menu"></span></div>
                                <nav class="main-menu navbar-expand-md ">
                                    <div class="collapse show navbar-collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix" style="direction:rtl !important">
                                            <li><a href="{{route('home')}}">{{ __('layout.acceuil') }}</a></li>
                                           
                                            <li><a href="{{route('contact')}}">{{ __('layout.contact') }}</a></li> 
                                             
                                            <li class="dropdown language-switch2">
                                            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('assset/images/language.png')}}" alt="" style="width: 23px;" >  {{ LaravelLocalization::getCurrentLocaleNative()=='français'?'Français': 'العربية'}}</a>
                                            <ul class="dropdown-menu2">
                                            <li class="">
                                            <a class=""   href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() == 'fr'?'ar':'fr', null, [], true) }}"><img src="{{asset('assset/images/france.jpg')}}"  style="width: 23px;"  alt=""> Francais</a>
                                            </li>
                                            <li  class="">
                                            <a class=""  href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() == 'fr'?'ar':'fr', null, [], true) }}"><img src="{{asset('assset/images/maroc.jpg')}}"  style="width: 23px;"  alt=""> Arabe</a>
                                            </li>
                                           

                                            </ul>


                                            </li>      
                                           
                                        @guest
                                            @if (Route::has('login'))
                                                <li>
                                                    <a href="{{ route('login') }}">{{__('layout.connecter')}}</a>
                                                </li>
                                            @endif
                                        @else
                                <li class="dropdown language-switch2">
                                <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('assset/images/Avatar.png')}}" alt="" style="width: 23px;" ></a>
                                <ul class="dropdown-menu2">
                                     @auth
                                            <li><a href="{{route('inscrip')}}">{{ __('layout.inscription') }}</a></li>
                                    @endauth
                                <li> <a href="{{route('user.edit')}}"> {{ __('layout.Editprofile') }}</a></li>
                                <li>    
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('layout.deconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form></li>

                                </ul>
                                </li> @endguest

          
                                    </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <div class="main-box clearfix">
                        <div class="logo-box">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('assset/images/logo.png')}}" alt="" title=""></a>
                            </div>
                        </div>
                        <div class="nav-outer clearfix">
                            <div class="mobile-nav-toggler"><span class="icon flaticon flaticon-menu"></span></div>
                            <nav class="main-menu navbar-expand-md "> </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <div class="close-btn"><span class="icon fas fa-times"></span></div>
                        <nav class="menu-box">
                            <div class="nav-logo">
                                <a href="index.html"><img src="images/logo.png" alt="" title=""></a>
                            </div>
                            <div class="menu-outer"></div>
                            <div class="options-box clearfix">
                                <div class="social-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

        </header>

     