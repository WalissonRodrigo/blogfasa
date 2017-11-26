    <div id="navbar" class="navbar-fixed scrollspy">
        <nav class="grey darken-2">
            <div class="nav-wrapper container">
                <div class="container"> <a href="{{ url('/') }}" class="brand-logo">Logo</a></div>

                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                <ul class="right hide-on-med-and-down">

                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/postagens') }}">Postagens Recentes</a></li>
                    <li><a href="{{ url('/postagens/criar') }}">Criar uma Postagem</a></li>
                    <li><a href="{{ url('/postagens/criar') }}">Postagens Arquivadas</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                    @if(Auth::check())
                    <li><a href="{{ env('URL_ADMIN_LOGIN') }}">Administração</a></li>
                    @else
                    <li><a href="{{ env('URL_ADMIN_LOGIN') }}">Login</a></li>
                    @endif


                </ul>
                <ul class="right side-nav" id="mobile-demo">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/postagens') }}">Postagens Recentes</a></li>
                    <li><a href="{{ url('/postagens/criar') }}">Criar um Post</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                    @if(Auth::check())
                    <li><a href="{{ env('URL_ADMIN_LOGIN') }}" >Administração</a></li>
                    <li><a href="{{ env('URL_ADMIN_LOGOUT') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                    <form class="hidden" id="logout-form" action="{{ env('URL_ADMIN_LOGOUT') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                    @else
                    <li><a href="{{ env('URL_ADMIN_LOGIN') }}">Login</a></li>
                    @endif

                </ul>
            </div>
        </nav>
    </div>
    @include('admin.layout.utilities.login_modal')