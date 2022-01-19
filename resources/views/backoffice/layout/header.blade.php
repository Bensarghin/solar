<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
           <img src="{{asset('assets/img/logo.png')}}" style="width: 176px;"
                               />
        </div>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
        </ul>

        <!-- start mobile menu -->
        <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu" id="content">
            <ul class="nav navbar-nav pull-right">
                <li><a class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <img alt="" class="img-circle " src="{{asset('assets/img/default.png')}}" />
                        <span class="username username-hide-on-mobile"> {{Auth::guard('admin')->user()->name}} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{route('admin.auth')}}">
                                <i class="icon-user"></i> profile 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.logout')}}">
                                <i class="icon-logout"></i> Déconnecter 
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
            </ul>
        </div>
    </div>
</div>