<!doctype html>
<html>
<head>
     @include('includes.head')
</head>
<body>
    @yield('cabecera')
    @yield('navegacion')

    @yield('carrusel')
    
    
    @yield('contenido')

    @yield('footer')

    @include('includes.scripts')


</body>
</html>