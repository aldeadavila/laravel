<!doctype html>
<html>
<head>
    @yield('head')
</head>
<body>
    @yield('cabecera')
    @yield('navegacion')
    @include('includes.carrusel')
    
    @yield('contenido')

    @yield('footer')

    @include('includes.scripts')


</body>
</html>