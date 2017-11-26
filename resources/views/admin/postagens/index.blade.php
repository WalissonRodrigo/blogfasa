@extends('admin.layout.html')

@section('head')
<!-- Permite Incluir Novos CSS ou JS no cabeçalho do HTML -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
<style>
    table.dataTable thead .sorting:before, table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc:after {
    padding: 5px;
    }
    .dataTables_wrapper .mdb-select {
        border: none;
    }
    .dataTables_wrapper .mdb-select.form-control {
        padding-top: 0;
        margin-top: -1rem;
        margin-left: 0.7rem;
        margin-right: 0.7rem;
        width: 100px;
    }
    .dataTables_length label {
        display: flex;
        justify-content: left;
    }
    .dataTables_filter label {
        margin-bottom: 0;
    }
    .dataTables_filter label input.form-control {
        margin-top: -0.6rem;
        padding-bottom: 0;
    }
    table.dataTable {
        margin-bottom: 3rem!important;
    }
    div.dataTables_wrapper div.dataTables_info {
        padding-top: 0;
    }
    .table-wrapper-2 {
        display: block;
        max-height: 500px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
</style>
<!-- Fim da Area de Inclusão de CSS ou JS no cabeçalho do HTML -->
@endsection

@section('breadcrumb')
    @if(Auth::user()->isAdministrador() || Auth::user()->isModerador())
    <p>Postagems</p>
    @else
    <p>Minhas Postagems</p>
    @endif
@endsection

@section('content')
<!-- Area de Conteúdo da Dashboard -->
<div class="card">
    <div class="card-body">
        <div class="table-wrapper-2">
            <table id="postagems" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th><b>Titulo</b></th>
                        <th><b>Data Postagem</b></th>
                        <th><b>Data Modificação</b></th>
                        <th><b>Ações</b></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th><b>Titulo</b></th>
                        <th><b>Data Postagem</b></th>
                        <th><b>Data Modificação</b><b></th>
                        <th width="150px"><b>Ações</b></th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th>{{ $post->titulo }}</th>
                        <th>{{ $post->created_at }}</th>
                        <th>{{ $post->updated_at }}</th>
                        <td width="auto">
                            <a href="{{ action('Admin\PostagemController@postagem', $post->id) }}" class="blue-text btn-floating btn-sm cyan"><i class="fa fa-book"></i></a>
                            <a href="{{ action('Admin\PostagemController@editar', $post->id) }}" class="teal-text btn-floating btn-sm light-green"><i class="fa fa-pencil"></i></a>
                            @if(Auth::user()->isAdministrador())
                                <a href="#" id="{{ $post->id }}" data-toggle="modal" class="red-text btn-floating btn-sm red" data-target="#modalConfirmDelete"><i class="fa fa-times"></i></a>                               
                                {{ Form::open(['action'=>['Admin\PostagemController@deletar', $post->id],'class'=>'hidden','method'=>'delete', 'id'=>'modalConfirmDelete'.$post->id]) }}
                                {{ Form::close() }}
                            @endif           
                        </td>
                    </tr>
                @endforeach
                <tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.layout.utilities.modal_deletar', ['modal'=>'modalConfirmDelete', 'idForm'=>'modalConfirmDelete', 'message'=>'Você tem certeza que deseja Apagar este Registro!'])
<!-- Fim da Area de Conteúdo -->
@endsection

@section('footer')
<!-- Rodapé da Dashboard -->

<!-- Fim do Rodapé -->
@endsection

@section('scripts')
<!-- Area para criação de JavaScripts no fim da Pagina-->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#postagems').DataTable();
        $('select').addClass('mdb-select');
        $('.mdb-select').material_select();
    });
</script>
<!-- Fim da Area dos JavaScripts no fim da Pagina -->
@endsection
