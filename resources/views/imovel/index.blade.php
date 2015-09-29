@extends('layouts.default')


@section('contenido')
 <h1>Listar imoveis!</h1>
	<table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Tipo de imóvel</th>
                    <th>Negocio</th>
                    <th>Bairro</th>
                    <th>cidade</th>
                    <th>Valor</th>
                    <th>Area</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imoveis as $imovel)
                <tr>
                    <td>{!! $imovel->tipo_de_imovel !!}</td>
                    <td>{!! $imovel->negocio !!}</td>
                    <td>{!! $imovel->bairro !!}</td>
                    <td>{!! $imovel->cidade !!}</td>
                    <td>{!! $imovel->valor !!}</td>
                    <td>{!! $imovel->area !!}</td>
                    <td>{!! $imovel->descricao !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">

        </div>
@stop