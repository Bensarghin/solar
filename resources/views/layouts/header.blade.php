
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
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
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
                                        <ul class="navigation clearfix">
                                            <li><a href="{{route('home')}}">Acceuil</a></li>
                                            @auth
                                            <li><a href="{{route('inscrip')}}">Inscription</a></li>
                                            @endauth
                                            <li><a href="{{route('contact')}}">Contact</a></li>        
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        {{ $properties['native'] }}
                                                    </a>
                                                </li>
                                            @endforeach                                       
                                        @guest
                                            @if (Route::has('login'))
                                                <li>
                                                    <a href="{{ route('login') }}">Se Connecter</a>
                                                </li>
                                            @endif
                
                                            {{-- @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                                                </li>
                                            @endif --}}
                                        @else
                                            <li>
                                                <a href="">
                                                    {{ Auth::user()->name }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Déconnecter') }}
                                                    </a>
                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                            </li>
                                        @endguest
                                    </ul>

                                    </div>
                                </nav>
                                <div class="outer-box">

                                    <div class="search-box-outer">
                                        <button class="search-box-btn" id="one"><span class="flaticon flaticon-magnifier"></span></button>
                                        <div id="modal-container">
                                            <div class="modal-background">
                                                <div class="modal"> <span class="close"><i class="fas fa-times"></i></span>
                                                    <div class="form-container">
                                                        <h2>Search Here</h2>
                                                        <form method="post" action="https://expert-themes.com/html/Musta9bali/blog.html">
                                                            <div class="form-group"> <input type="search" name="field-name" value="" placeholder="Search Here" required> <button type="submit" class="search-btn"><span class="fa fa-search"></span></button></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <div class="outer-box">
                                <div class="search-box-outer">
                                    <button class="search-box-btn" id="one"><span class="flaticon flaticon-magnifier"></span></button>
                                    <div id="modal-container">
                                        <div class="modal-background">
                                            <div class="modal"> <span class="close"><i class="fas fa-times"></i></span>
                                                <div class="form-container">
                                                    <h2>Search Here</h2>
                                                    <form method="post" action="">
                                                        <div class="form-group"> <input type="search" name="field-name" value="" placeholder="Search Here" required> <button type="submit" class="search-btn"><span class="fa fa-search"></span></button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-box">
                                    <div class="dropdown">
                                        <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        
                                    
                                    </div>
                                </div></div>
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