<!--Main Navigation-->
<header>
    @include('admin.layout.navbar')
    @if(Auth::check())
        @include('admin.layout.sidebar')
    @endif
    @yield('header')
</header>
<!--Main Navigation-->