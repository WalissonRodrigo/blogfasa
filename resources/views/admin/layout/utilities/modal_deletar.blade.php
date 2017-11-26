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
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">{{ isset($message) ? $message : 'Alerta' }}</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fa fa-times fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a href="#" onclick="confirmar();" class="btn  btn-outline-secondary-modal">Sim</a>
                <a type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">Não</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmDelete-->
@section('scripts')
<script>
    var id = null;
    $(function(){
        $(document).on('click', '[data-toggle="modal"]', function(event){
            event.preventDefault();
            target = $(this).attr("data-target");
            id = $(this).attr("id");
        });
    });

    function confirmar(){
        event.preventDefault();
        //$( "#{{ $idForm }}"+id ).submit(); //Com esse metodo Jquery tbm funciona
        document.getElementById("{{ $idForm }}"+id).submit(); //esse javascript é mais facil de intender
    }        
</script>
@endsection