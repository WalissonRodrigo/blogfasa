@extends('admin.layout.html') 
@section('head')
<!-- Permite Incluir Novos CSS ou JS no cabeçalho do HTML -->

<!-- Fim da Area de Inclusão de CSS ou JS no cabeçalho do HTML -->
@endsection

@section('breadcrumb')
<p>Postagem</p>
@endsection 

@section('header')
<br><br><br>
<section class="text-center">
    <div class="img-responsive">
        <img src="{{ isset($posts->image_1) ? $posts->image_1 : url('adm/img/sem.gif') }}" style="width: 85%; height:400px;">
    </div>
</section>
@endsection
@section('content')
<!-- Area de Conteúdo da Dashboard -->
<div class="container-fluid ">
    <!--Grid row-->
    <div class="row" style="margin-top: -100px;">

        <!--Grid column-->
        <div class="col-md-12 px-lg-5">
            <!--Card-->
            <div class="card pb-5 mx-md-3">
                @if(isset($posts))
                <div class="card-body">

                    <div class="container">

                        <!--Section heading-->
                        <h1 class="section-heading h1 pt-4 mb-3">
                            <strong>{{ $posts->titulo or "Titulo Desconhecido"}}</strong>
                        </h1>
                        <div class="row">
                            <div class="col-md-12 col-xl-12 d-flex justify-content-center">
                                <p class="font-small dark-grey-text mb-1">
                                    <strong>Autor:</strong> {{ $posts->autor or "Desconhecido"}}</p>
                                <p class="font-small grey-text mb-0 ml-3">
                                    <i class="fa fa-clock-o dark-grey-text"></i> {{ Carbon\Carbon::parse($posts->updated_at)->format('d/m/Y H:i:s') }}</p>
                            </div>
                        </div>

                        <!--Grid row-->
                        <div class="row pt-lg-5 pt-3">
                            <!--Grid column-->
                            <div class="col-md-12 col-xl-12">
                                <form>
                                    <!--Grid Post Row-->
                                    <div class="row mt-3">
                                        <p class="dark-grey-text article">{{ $posts->conteudo }}</p>
                                    </div>
                                    <!--Grid row-->
                                    <!--Grid Image 2 Row-->
                                    <div class="row mb-2 mt-4 text-center">
                                             <!--Grid column-->
                                        <div class="col-md-12 my-4">
                                            <img src="{{ $posts->image_2 or url('adm/img/sem.gif') }}" class="img-fluid z-depth-1 img-responsive" alt="sample image">
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row my-5">
                                        <!--Grid column-->
                                        <div class="col-md-12 text-center">

                                            <h4 class="text-center font-bold dark-grey-text mt-3 mb-3"><strong>Comportilhe esta Postagem: </strong></h4>
                                            <button type="button" class="btn btn-fb btn-sm waves-effect waves-light"><i class="fa fa-facebook left"></i> Facebook</button>
                                            <!--Twitter-->
                                            <button type="button" class="btn btn-tw btn-sm waves-effect waves-light"><i class="fa fa-twitter left"></i> Twitter</button>
                                            <!--Google +-->
                                            <button type="button" class="btn btn-gplus btn-sm waves-effect waves-light"><i class="fa fa-google-plus left"></i> Google +</button>
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->
                                    <hr class="divider">
                                    <!--Comments-->
                                    <section>
                                        <!--Main wrapper-->
                                        <div class="comments-list text-center text-md-left">
                                            <div class="section-heading mt-5 mb-5">
                                                <h4 class="font-bold mt-5 mb-5 text-center">
                                                    <strong>Comentários</strong>
                                                </h4>
                                            </div>
                                            @if(isset($comentarios))
                                            <!--First row-->
                                            <div class="row">
                                                <!--Image column-->
                                                <div class="col-sm-2 col-12">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg" alt="sample image" class="z-depth-1">
                                                </div>
                                                <!--/.Image column-->
                                                <!--Content column-->
                                                <div class="col-sm-10 col-12">
                                                    <a><h5 class="font-bold mb-2"><strong>John Doe</strong></h5></a>
                                                    <div class="">
                                                        <ul class="list-unstyled">
                                                            <li class="font-small grey-text">
                                                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        </ul>
                                                    </div>
                                                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur.</p>
                                                </div>
                                                <!--/.Content column-->
                                            </div>
                                            <!--/.First row-->
                                            @endif
                                        </div>
                                        <!--/.Main wrapper-->

                                    </section>
                                    <!--/Comments-->
                                    <hr>
                                    <!--Section: Leave a reply (Not Logged In User)-->
                                    <section class="mb-4 wow fadeIn" data-wow-delay="0.2s" style="animation-name: none; visibility: visible;">
                                        <h4 class="font-bold mt-5 mb-5 text-center">
                                            <strong>Escreva seu Comentário</strong>
                                        </h4>
                                        <!--Grid row-->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-12">
                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <span class="input-group-addon white black-text" id="basic-addon8">1</span>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Name" aria-describedby="basic-addon9">
                                                </div>
                                            </div>
                                            <!--Grid column-->
                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-6">
                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <span class="input-group-addon white black-text" id="basic-addon9">2</span>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Email" aria-describedby="basic-addon9">
                                                </div>
                                            </div>
                                            <!--Grid column-->
                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-6">
                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <span class="input-group-addon white black-text" id="basic-addon10">3</span>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Website" aria-describedby="basic-addon9">
                                                </div>
                                            </div>
                                            <!--Grid column-->
                                        </div>
                                        <!--Grid row-->
                                        <!--Grid row-->
                                        <div class="row">
                                            <div class="col-12 mt-1">
                                                <div class="form-group basic-textarea rounded-corners shadow-textarea">
                                                    <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
                                                </div>
                                                <div class="text-right">
                                                    <button class="btn btn-grey waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid row-->
                                    </section>
                                    <!--/Section: Leave a reply (Not Logged In User)-->
                                </form>
                            </div>
                            <!--/Grid column-->
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--Grid column-->
                </div>
                @else
                <h1> Conteúdo não encontrado </h1>
                @endif
                <!--Grid row-->

            </div>
            <!--/Card-->
        </div>
        <!--/Grid column-->
    </div>
    <!--/Grid row-->
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