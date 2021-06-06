<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('home')}}" class="brand-link">
        <img src="{{asset('template/dist/img/LogoFindPeken1.png')}}" alt="FindPeken Logo" class="brand-image">
        <span class="brand-text font-weight-bold">FindPeken</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('home')}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{url('pasar')}}"
                        class="nav-link {{ Request::is('pasar')|| Request::is('pasar/edit/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Master Pasar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user')}}"
                        class="nav-link {{ Request::is('user') || Request::is('user/edit/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Master User
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>