<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                           
                        </div>
                       
                    </div>
                </li>
                <li class="nav-item start open">
                    <a href="{{route('admin.home')}}" class="nav-link">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Control panel</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start open">
                    <a class="nav-link" href="{{route('etudiants')}}">
                        <i class="material-icons">group</i>
                        <span class="title">Gérer Etudiants</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start open">
                    <a class="nav-link" href="{{route('users')}}">
                        <i class="material-icons">lock</i>
                        <span class="title">Inscriptions</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  start open">
                    <a href="{{route('etudiant.add')}}"class="nav-link">
                        <i class="material-icons">school</i>
                        <span class="title">Nouveau Etudiant </span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>