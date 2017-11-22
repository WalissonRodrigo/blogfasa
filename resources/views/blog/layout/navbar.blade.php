    <div id="navbar" class="navbar-fixed scrollspy">
        <nav class="grey darken-2">
            <div class="nav-wrapper container">
                <div class="container"> <a href="{{ url('/') }}" class="brand-logo">Logo</a></div>

                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                <ul class="right hide-on-med-and-down">

                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">Quem Somos</a></li>
                    <li><a href="{{ url('/posts') }}">Criar Post</a></li>
                    <li><a href="{{ url('/contact') }}">Contato</a></li>
                    <li><a href="{{ env('URL_ADMIN_LOGIN') }}">Administrador</a></li>


                </ul>
                <ul class="right side-nav" id="mobile-demo">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">Quem Somos</a></li>
                    <li><a href="{{ url('/posts') }}">Criar Post</a></li>
                    <li><a href="{{ url('/contact') }}">Contato</a></li>
                    <li><a href="{{ env('URL_ADMIN_LOGOUT') }}">Sair</a></li>

                </ul>
            </div>
        </nav>
    </div>
