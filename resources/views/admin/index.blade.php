@extends('admin.layout.html')

@section('head')
<!-- Permite Incluir Novos CSS ou JS no cabeçalho do HTML -->

<!-- Fim da Area de Inclusão de CSS ou JS no cabeçalho do HTML -->
@endsection

@section('breadcrumb')
    <p>Dashboard</p>
@endsection

@section('content')
<!-- Area de Conteúdo da Dashboard -->
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
        <nav class="my-4">
            <ul class="pagination pagination-circle pg-blue mb-0">
                <!--Primeiro-->
                <li class="page-item"><a class="page-link">Primeiro</a></li>
                    {!! $posts->render() !!}
                <!--Ultimo-->
                <li class="page-item"><a class="page-link">Ultimo</a></li>
            </ul>
        </nav>
    </div>
@else
    <h1>Você ainda não tem nenhuma postagem no Blog. <a href="{{ action('Admin\PostagemController@cadastrar') }}" class="btn btn-info">Primeira Postagem</a>
@endif
<!-- Fim da Area de Conteúdo -->
@endsection

@section('footer')
<!-- Rodapé da Dashboard -->

<!-- Fim do Rodapé -->
@endsection

@section('scripts')
<!-- Area para criação de JavaScripts no fim da Pagina-->
<!-- Initializations -->
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').material_select();
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Tooltip Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- Fim da Area dos JavaScripts no fim da Pagina -->
@endsection

