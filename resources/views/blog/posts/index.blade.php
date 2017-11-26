@extends('blog.layout.html') 

@section('head')
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
                <h1 class="header center grey-text text-darken-2">Blog Fasa</h1>
                <div class="row center">
                    <h5 class="header col s12 light grey-text text-darken-2">Blog Desenvolvimento Web Fasa 2017</h5>
                </div>
                <div class="row center">
                    <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-2 head-link"><i class="fa fa-angle-double-down"></i></a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{ url('blog/images/main.jpg') }}" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container" id="startPosts">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col s12 m10 offset-m1 l9 offset-l1">
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ action('Blog\BlogController@detalhes', ['id'=>$post->id]) }}">
                        <h4 class="post-title titleFont">
                            {{ $post->titulo }}
                        </h4>
                    </a>
                    <p class="post-meta"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }} <a href="#">{{ $post->user->name or 'Autor Desconhecido' }}</a></p>
                </div>
                <hr> 
                @endforeach
                <div class="row">
                    <a href="#startPosts" class="pagination">
                {!! $posts->render() !!}
            </a>
                </div>
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