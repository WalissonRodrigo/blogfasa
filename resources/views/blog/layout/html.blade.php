<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('blog.layout.head')

<body>
    @include('blog.layout.navbar') 
	
	@yield('content')
	
    @include('blog.layout.footer') 
	
	@include('blog.layout.scripts')
</body>

</html>