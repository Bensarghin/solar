<!DOCTYPE html>
<html lang="en">
    @include('backoffice.layout.head')
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">

    @include('backoffice.layout.header')

    <!-- start page container -->
    <div class="page-container">
        @include('backoffice.layout.nav')
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">@yield('content-title')</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">@yield('content-title')</li>
                        </ol>
                    </div>
                </div>
            @yield('content')
            </div>
        </div>
	</div>
    
    @include('backoffice.layout.footer')
</body>
</html>



