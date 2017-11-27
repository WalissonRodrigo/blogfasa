@extends('admin.layout.html')

@section('head')
<!-- Permite Incluir Novos CSS ou JS no cabeçalho do HTML -->

<!-- Fim da Area de Inclusão de CSS ou JS no cabeçalho do HTML -->
@endsection

@section('header')

@endsection

@section('breadcrumb')
    @if(isset($posts))
    <p>Editar Postagem</p>
    @else
    <p>Criar Nova Postagem</p>
    @endif
@endsection

@section('content')
<!-- Area de Conteúdo da Dashboard -->
<div class="card">
    <div class="card-body">
        <div class="row">
            @if(isset($posts))
            {!! Form::model($posts, ['action'=>['Admin\PostagemController@atualizar', $posts->id], 'method'=>'put']) !!}
            @else
            {!! Form::open(['action'=>'Admin\PostagemController@cadastrar', 'method'=>'POST', 'class'=>'md-form']) !!}
            @endif
            <div class="col-sm-12 col-md-12">
                <div class="container-fluid">
                    <div class="card-content">
                        <h4 class="card-title text-center">Informações da Postagem<br><br></h4>
                        <div class="row">
                        <!-- Inicio dos Inputs -->
                            <div class="col-xs-12 col-md-6">
                                <div class="md-form">    
                                    {{ Form::label('titulo', 'Titulo', [ 'class'=>'' ]) }}
                                    {{ Form::text('titulo', null, ['class'=>'form-control', 'id'=>'titulo']) }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="md-form">
                                    {{ Form::label('autor', 'Autor', [ 'class'=>'' ]) }}
                                    {{ Form::text('autor', null, [ 'class'=>'form-control' ]) }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12 col-12">
                                <div class="md-form">
                                    {{ Form::label('conteudo', 'Conteudo', [ 'class'=>'' ]) }}
                                    {{ Form::textarea('conteudo', null, [ 'class'=>'md-textarea' ]) }}    
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-6">
                                <div class="md-form">
                                    {{ Form::label('image_1', 'URL da Imagem de Capa e Exibição', [ 'class'=>'' ]) }}
                                    {{ Form::text('image_1', null, [ 'class'=>'form-control' ]) }}    
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-6">
                                <div class="md-form">
                                    {{ Form::label('image_2', 'URL da Imagem Inferior da Postagem', [ 'class'=>'' ]) }}
                                    {{ Form::text('image_2', null, [ 'class'=>'form-control' ]) }}    
                                </div>
                            </div>
                        <!-- Fim dos Inputs -->
                        </div>
                        <div class="row pull-right">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-rounded blue-gradient pull-right">
                                    <i class="fa fa-floppy-o"></i> Salvar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>    
    </div>
</div>
<!-- Fim da Area de Conteúdo -->
@endsection

@section('footer')
<!-- Rodapé da Dashboard -->

<!-- Fim do Rodapé -->
@endsection

@section('scripts')
<!-- Area para criação de JavaScripts no fim da Pagina-->

<!-- Fim da Area dos JavaScripts no fim da Pagina -->
@endsection
