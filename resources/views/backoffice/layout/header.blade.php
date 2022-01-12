<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            <a href="index.html">
                <span class="logo-icon material-icons fa-rotate-45">school</span>
                <span class="logo-default">Smart</span> </a>
        </div>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
        </ul>
        <form class="search-form-opened" action="#" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="query">
                <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit">
                        <i class="icon-magnifier"></i>
                    </a>
                </span>
            </div>
        </form>
        <!-- start mobile menu -->
        <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li><a class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                <!-- start language menu -->
                <li class="dropdown language-switch">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
                            src="{{asset('assets/img/flags/gb.png')}}" class="position-left" alt=""> English <span
                            class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="deutsch"><img src="{{asset('assets/img/flags/de.png')}}" alt=""> Deutsch</a>
                        </li>
                        <li>
                            <a class="ukrainian"><img src="{{asset('assets/img/flags/ua.png')}}" alt=""> Українська</a>
                        </li>
                        <li>
                            <a class="english"><img src="{{asset('assets/img/flags/gb.png')}}" alt=""> English</a>
                        </li>
                        <li>
                            <a class="espana"><img src="{{asset('assets/img/flags/es.png')}}" alt=""> España</a>
                        </li>
                        <li>
                            <a class="russian"><img src="{{asset('assets/img/flags/ru.png')}}" alt=""> Русский</a>
                        </li>
                    </ul>
                </li>
                <!-- end language menu -->
                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <img alt="" class="img-circle " src="{{asset('assets/img/dp.jpg')}}" />
                        <span class="username username-hide-on-mobile"> Kiran </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="user_profile.html">
                                <i class="icon-user"></i> Authent 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.logout')}}">
                                <i class="icon-logout"></i> Log Out 
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
            </ul>
        </div>
    </div>
</div>