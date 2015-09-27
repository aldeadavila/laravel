@layout('layouts.master')
<!--con layout plantilla hacemos uso de nuestra plantilla base, no podemos escribir
nada anter o no renderizará la pantilla-->
 
<!--establecemos un título en la sección título que hemos definido
en nuestra plantilla base-->
@section('titulo')
{{ 'Nuestro título' }}
@endsection
 
<!--establecemos nuestra navegación y añadimos otro elemento-->
@section('navegacion')
   <!--heredamos con parent lo que hay en la plantilla base
   pero añadimos otro elemento al menú-->
   @parent
   <li><a href="#">Otro enlace</a></li>
@endsection
 
<!--establecemos el contenido de la sección contenido de 
nuestra plantilla base-->
@section('contenido')
 
   <h1>{{ '¡Esta página está utilizando una plantilla base!' }}</h1>
 
@endsection
 
<!--establecemos el contenido de nuestra sección sidebar
que previamente hemos creado en nuestra plantilla base-->
@section('sidebar')
 
   <h1>{{ '¡Un sidebar!' }}</h1>
   
@endsection