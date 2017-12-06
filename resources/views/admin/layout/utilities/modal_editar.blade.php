<!--Modal: Generico para Delete -->

<!--
Este Modal espera duas variaveis
$idForm que define o nome do Modal sendo o mesmo que será chamado no data-togle do botão.
$message é a menssagem generica para o titulo da Janela.
É possivel criar mais modais com mais requisitos genericos apartir deste conceito.
Neste caso esse script no final é quem faz boa parte da mágica pois se não for definido os nomes certos dos IDs não funciona.
Como nesse exemplo eu pego um ID do Modal e Faço Submit em outro ID é importante passar no campo ID do botão ou link apenas o numero do ID mesmo.
-->

<div class="modal fade" id="{{ isset($modal) ? $modal : 'myModal' }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fa fa-pencil"></i> {{ isset($message) ? $message : 'Formulário' }}</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body mb-0">
                {{ Form::open(['class'=>'hidden','method'=>'put', 'id'=>'modalEditar']) }}
                    <div class="md-form form-sm">    
                        <label for="titulo" class="label-control" id="label1">Titulo</label>
                        {{ Form::text('titulo', null, ['class'=>'form-control', 'id'=>'titulo']) }}
                    </div>
                    <div class="md-form form-sm">
                        <label for="autor" class="label-control" id="label2">Autor</label>
                        {{ Form::text('autor', null, [ 'class'=>'form-control', 'id'=>'autor' ]) }}
                    </div>
                    <div class="md-form form-sm">
                        {{ Form::label('conteudo', 'Conteudo', [ 'class'=>'active' ]) }}
                        <label for="conteudo" class="label-control" id="label3">Conteudo</label>
                        {{ Form::textarea('conteudo', null, [ 'class'=>'md-textarea', 'id'=>'conteudo' ]) }}    
                    </div>
                    <div class="md-form form-sm">
                        <label for="image_1" class="label-control" id="label4">URL da Imagem de Capa e Exibição</label>
                        {{ Form::text('image_1', null, [ 'class'=>'form-control', 'id'=>'image_1' ]) }}    
                    </div>
                    <div class="md-form form-sm">
                        <label for="image_2" class="label-control" id="label5">URL da Imagem Inferior da Postagem</label>
                        {{ Form::text('image_2', null, [ 'class'=>'form-control', 'id'=>'image_2' ]) }}    
                    </div>
                    <!-- Fim dos Inputs -->
                {{ Form::close() }}

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a href="#" onclick="confirmarEdicao();" class="btn  btn-outline-secondary-modal" data-dismiss="modal">Sim</a>
                <a type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">Não</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmDelete-->
@section('scripts2')
<script>
    var id = null;
    $(function(){
        $(document).on('click', '[data-toggle="modal"]', function(event){
            event.preventDefault();
            target = $(this).attr("data-target");
            id = $(this).attr("id");
            $('#label1').addClass('active');
            $('#label2').addClass('active');
            //$('#label3').addClass('active');
            $('#label4').addClass('active');
            $('#label5').addClass('active');
        });
    });

    function confirmarEdicao(){
        event.preventDefault();
        atualizarRegistro() //esse javascript é mais facil de intender
    }        
</script>
<script>
    function atualizarModal(idPost){
        $.ajax({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
            'processing': true, 
            'serverSide': false,
            type: "GET",
            url: "{{ $urlBuscar }}"+idPost,
            success: function(data) {
                var result = JSON.parse(data);
                $('#titulo').val(result.titulo);
                $('#autor').val(result.autor);
                $('#conteudo').val(result.conteudo);
                $('#image_1').val(result.image_1);
                $('#image_2').val(result.image_2);
            }
        });
    }

    function atualizarRegistro(){
        $.ajax({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
            'processing': true, 
            'serverSide': false,
            type: "get",
            url: "{{ $urlEditar }}"+id,
            data: { 
                titulo: $('#titulo').val(), 
                autor: $('#autor').val(),
                conteudo: $('#conteudo').val(),
                image_1: $('#image_1').val(),
                image_2: $('#image_2').val()
            },
            success: function(data) {
                toastr.info("Registro Atualizado com sucesso. Recarregue a página para ver isso.", "Sucesso!");
                
                window.location.replace("http://blog/admin/postagens");
            }
        });
    }
</script>

@endsection