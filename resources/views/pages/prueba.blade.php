@extends('layouts.default')
@section('contenido')
   {{ dd($conFotos) }}
@foreach($negocios as $negocio)
 {{ $negocio }}
@endforeach

@stop