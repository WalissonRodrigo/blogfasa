<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav fixed sn-bg-4" style="transform: translateX(-100%);">
    <ul class="custom-scrollbar list-unstyled">
        <!-- Logo -->
        <li class="logo-sn waves-effect">
            <div class=" text-center">
                <a href="{{ url('/admin') }}" class="pl-0">
                    <img src="{{url("adm/img/logo.png")}}" class="responsive-img">
                </a>
            </div>
        </li>
        <hr>
        <!--/. Logo -->
        <!--Search Form--
        <li>
            <form class="search-form" role="search">
                <div class="form-group waves-light waves-effect waves-light">
                    <input type="text" class="form-control" placeholder="Pesquisar">
                </div>
            </form>
        </li>
        >!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a href="{{ url(action('Admin\AdminController@index')) }}" class="waves-effect">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard
                    </a>
                </li>
            
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-chevron-right"></i> Postagens
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="{{ action('Admin\PostagemController@index') }}" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i>@if(Auth::check() && Auth::user()->isUsuario()) Minhas Postagens @else Todas as Postagems @endif</a>
                            </li>
                            <li>
                                <a href="{{ action('Admin\PostagemController@cadastrar') }}" class="waves-effect"> <i class="fa fa-pencil"></i>Nova Postagem</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="waves-effect arrow-r disabled" href="#">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>Perfil
                    </a>
                </li>
                @if(Auth::check() && Auth::user()->isAdministrador())
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-cog" aria-hidden="true"></i>Configurações
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="{{ action('Admin\UsuarioController@index') }}" class="waves-effect"><i class="fa fa-users"></i>Usuários</a>
                            </li>
                            <li>
                                <a href="{{ action('Admin\PermissaoController@index') }}" class="waves-effect"><i class="fa fa-lock"></i>Permissões</a>
                            </li>
                            <li>
                                <a href="{{ action('Admin\FuncaoController@index') }}" class="waves-effect"><i class="fa fa-unlock"></i>Funções</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </li>
        <!--/. Side navigation links -->
    </ul>

    <!-- Mask -->
    <div class="sidenav-bg mask-strong"></div>

</div>
<!--/. Sidebar navigation -->