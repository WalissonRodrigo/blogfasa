<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark double-nav fixed-top scrolling-navbar">

    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="{{ url('/admin') }}" data-activates="slide-out" class="button-collapse">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    @include('admin.layout.breadcrumb')

    <!-- Links -->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" href="{{ url('/admin') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-user"></i>
                <span class="clearfix d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item waves-effect waves-light disabled" href="#">Perfil</a>
                <a class="dropdown-item waves-effect waves-light" href="{{ env('URL_ADMIN_LOGOUT') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                <form class="hidden" id="logout-form" action="{{ env('URL_ADMIN_LOGOUT') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </div>
            
        </li>
    </ul>

</nav>
<!--/.Navbar-->