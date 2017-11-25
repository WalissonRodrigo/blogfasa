    <footer class="page-footer grey darken-2">
        <div class="container">
            <div class="row">
                <div class="col s12 l4 m10">
                    <h5 class="white-text">Siga "Blog Fasa"</h5>
                    <p class="white-text">Se inscreva para receber informações sobre novas postagens.</p>
                    <form>

                        <div class="input-field">
                            <i class="mdi-communication-email prefix"></i>
                            <input id="icon_prefix" type="email" class="validate">
                            <label for="icon_prefix">Email</label>
                        </div>

                    </form>

                    <a class="waves-effect waves-light btn">Registrar
                    <i class="fa fa-sign-in right"></i></a>
                </div>
                <!--col-->


                <div id="categories" class="col l3 offset-l1 s12 m8">
                    <h5 class="white-text">Categorias</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Cursos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Depoimentos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Casos de Sucesso</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Avaliações Externas</a></li>
                    </ul>
                </div>
                <!--col-->



                <div class="col l3 s12 m8">
                    <h5 class="white-text">Arquivos</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="{{ url('/arquivos?date='.Carbon\Carbon::now()->subMonths(0)->format('d-m-Y') ) }}">Novembro 2017</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ url('/arquivos?date='.Carbon\Carbon::now()->subMonths(1)->format('d-m-Y') ) }}">Outubro 2017</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ url('/arquivos?date='.Carbon\Carbon::now()->subMonths(2)->format('d-m-Y') ) }}">Setembro 2017</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ url('/arquivos?date='.Carbon\Carbon::now()->subMonths(3)->format('d-m-Y') ) }}">Agosto 2017</a></li>
                    </ul>
                </div>
                <!--col-->

            </div>
            <!--row-->
        </div>
        <br>
        <!--conatiner-->
        <div class="footer-copyright">
            <div class="container">
                <p>Copyright © Your website name</p>
                <br>
            </div>
        </div>
    </footer>