@extends('layouts.default')

@section('contenido')
<h1><?php $title = 'Crear Imóvel'; echo $title?></h1>

{!! Form::open(['url' => 'imoveis']) !!}
    <div class="form-group">

        {!! Form::label('tipo_de_imovel', 'Tipo de imóvel:') !!}
        {!! Form::select('tipo_de_imovel', array('Apartamento' => 'apartamento', 'Casa em Condominio' => 'casa_condominio', 'Casa Bairro' => 'casa_bairro', 'Sitio' => 'sitio', 'Chacara' => 'chacara', 'Terreno Residencial' => 'terreno_residencial', 'Terreno Industrial' => 'terreno_industrial', 'Terreno Comercial' => 'terreno_comercial', 'Gapão' => 'gapao', 'Casa Litoral' => 'casa_litoral', 'Chacara Litoral' => 'chacara_litoral', 'Sobrado Bairro' => 'sobrado_bairro', 'Ponto Comercial' => 'ponto_comercial', 'Salão Comercial' => 'salao_comercial', 'Belo Sitio' => 'belo_sitio',
         'Predio Comercial' => 'predio_comercial', 'Imóvel Comercial' => 'imovel_comercial'), ['class' => 'form-control']) !!}
    
        {!! Form::label('negocio', 'Negocio:') !!}
        {!! Form::select('negocio', array('Venda' => 'venda', 'Aluguel' => 'aluguel', 'Venda e Locação' => 'venda_locacao'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cidade', 'Cidade:') !!}
        {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('valor', 'Valor:') !!}
        {!! Form::text('valor', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('area', 'Area:') !!}
        {!! Form::text('area', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Adicionar imóvel', ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}
<!-- <form>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form> -->
@stop