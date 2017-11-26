<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('admin.layout.head')
    <body class="fixed-sn light-blue-skin">
        @include('admin.layout.header')
        @include('admin.layout.main')
        @include('admin.layout.footer')
        @include('admin.layout.scripts')
        <div class="hiddendiv common"></div>
    </body>
</html>