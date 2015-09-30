@extends('layouts.default')
	<?php $title = $imovel->tipo_de_imovel?>
	
@section('contenido')

<h1>{{ $imovel->tipo_de_imovel . ' (' . $imovel->negocio . ') ' . $imovel->bairro}}</h1>

<article>
<!-- Ejemplo ficha -->
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <img src={{ $fotos[0]-> ruta}}
            alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-8 col-md-8">
            <blockquote>
                <p>{{ $imovel->tipo_de_imovel}}</p> <small><cite title="Source Title">{{$imovel->cidade}}, São Paulo<i class="glyphicon glyphicon-map-marker"></i></cite></small>
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> masterwayne@batman.com
                <br
                /> <i class="glyphicon glyphicon-globe"></i> www.bootsnipp.com
                <br /> <i class="glyphicon glyphicon-gift"></i> January 30, 1974</p>
        </div>
    </div>
<!-- Fin ejemplo ficha -->

</article>


@stop

