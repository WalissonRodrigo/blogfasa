@extends('blog.layout.html') @section('head')
<!--Inicio do Bloco Head da pagina! 
Aqui dentro pode-se carregar novos css ou js -->



<!--Fim do Conteúdo do Head -->
@endsection 
@section('content')
<!-- Inicio do Bloco de Conteúdo! 
Onde serão criados novas paginas usando o mesmo layout -->

<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container valign">
            <br><br>
            <h1 class="header center grey-text text-darken-3">{{ isset($posts) == false ? 'Criar Post' : 'Editar Post' }}</h1>
            <div class="row center">
                <h5 class="header col s12 light grey-text text-darken-3">Blog Web Fasa</h5>
            </div>
            <div class="row center">
                <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-3 head-link"><i class="fa fa-angle-double-down"></i></a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{url('blog/images/contact1.jpg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container" id="startPosts">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col s12 m10 offset-m1 l9 offset-l1">

            <form class="col s12" action="/post/create" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="titulo" id="message-sub" type="text" class="validate">
                        <label for="message-sub">Título</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="conteudo" id="text_area" class="materialize-textarea"></textarea>
                        <label for="text_area">Conteúdo</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="waves-effect waves-light btn">Enviar<i class="mdi-content-send right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Fim do Bloco de Conteúdo -->
@endsection 

@section('scripts')
<!-- Inicio do Bloco de Scripts! 
Aqui dentro pode-se criar novos js ou passas o caminho do mesmo  -->

<script>
    $(document).ready(function() {
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.button-collapse').sideNav();
    });
</script>
<script>
    $('.head-link').click(function(e) {
        e.preventDefault();

        var goto = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(goto).offset().top
        }, 800);
    });
</script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-60673008-2', 'auto');
    ga('send', 'pageview');
</script>

<!-- Fim do Bloco de Scripts -->
@endsection