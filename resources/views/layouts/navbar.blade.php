<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto mr-0 d-flex">
        <li class="nav-item dropdown ml-auto mr-0">
            <a class="nav-link" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><img src="{{ auth()->user()->getImage()}}" class="img-circle mr-2 img-responsive"
                    style="width: 30px; height: 30px" alt="Avatar">
                <span>
                    {{auth()->user()->name}}
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="{{url('/konsumen/profil/'.auth()->user()->id)}}">Profil</a>

                <a class="dropdown-item" id="logout" href="{{url('logout')}}">Logout</a>

            </div>
        </li>
    </ul>
</nav>