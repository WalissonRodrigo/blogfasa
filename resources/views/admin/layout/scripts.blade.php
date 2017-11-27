<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{ url('adm/js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ url('adm/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ url('adm/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ url('adm/js/mdb.min.js') }}"></script>
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
<!-- Scripts customizados para a página -->
@yield('scripts')