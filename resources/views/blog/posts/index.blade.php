@extends('admin.layout.html') 

@section('head')
<!--Inicio do Bloco Head da pagina! 

<!--Fim do Conteúdo do Head -->
@endsection

@section('breadcrumb')
<p>Seja Bem Vindo</p>
@endsection 

@section('content')
<!-- Inicio do Bloco de Conteúdo! -->
@if(isset($posts))
    @foreach($posts as $post)
    <div class="row pb-5">
        <!--Grid column-->
        <div class="col-lg-5 ml-auto col-xl-4 pb-3">
            <!--Featured image-->
            <div class="view overlay hm-white-slight z-depth-1-half">
                <img src="{{ $post->image_1 or url('adm/img/sem.gif')}}" class="img-fluid">
                <a>
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 mr-auto col-xl-6">
            <!--Excerpt-->
            <h4 class="mb-4"><strong>{{ $post->titulo or "Titulo Desconhecido" }}</strong></h4>
            <p>{{ $post->conteudo or "" }}</p>
            <p>por <a><strong>{{ $post->autor or "Desconhecido" }}</strong></a>, {{ isset($post) ? Carbon\Carbon::parse($post->updated_at)->format('d/m/Y H:i:s') : Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</p>
            <a href="{{ isset($post->id) ? action('Blog\BlogController@postagem', [$post->id]) : url('/')}}" class="btn btn-indigo mb-3 waves-effect waves-light">Leia mais</a>
        </div>
        <!--Grid column-->
    </div>
    @endforeach
    <div class="row pb-5">
        <!--Primeiro-->
        {!! $posts->links() !!}
        <!--Ultimo-->
    </div> 
@endif
<!-- Fim do Bloco de Conteúdo -->
@endsection

@section('scripts')
<!-- Inicio do Bloco de Scripts! 
Aqui dentro pode-se criar novos js ou passas o caminho do mesmo  -->

<!-- Fim do Bloco de Scripts -->
@endsection


