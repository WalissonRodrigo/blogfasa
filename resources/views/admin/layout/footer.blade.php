<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © {{ Carbon\Carbon::now()->format('Y') }} Copyright:
            <a href="https://blogfasa.herokuapp.com/"> Blog Fasa </a>

        </div>
    </div>
    <!--/.Copyright-->
    @yield('footer')
</footer>
<!--/.Footer-->