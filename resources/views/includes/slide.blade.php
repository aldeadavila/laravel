<div class="fill">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="page-header">{{ $imoveis[$numeroImovel]->negocio . " " . $imoveis[$numeroImovel]->tipo_de_imovel
             . " " . $imoveis[$numeroImovel]->cidade }}</h2>
            <div class="row">
                <div class="col-md-6">
                <img src="<?php echo $fotos[$numeroImovel]->ruta ?>" class="img-thumbnail">
                </div>
                <div class="col-md-6 description">
                    <div class="row">
                        {{ $imoveis[$numeroImovel]->descricao }}
                    </div>
                    <hr>
                    <div class="row">
                        <?php $carac =  $imoveis[$numeroImovel]->caracteristicas ?>
                        <ul>
                        @foreach ($carac as $cara)
                            
                            <li class="fa fa-check-circle-o">{{ " " . $cara->name }}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<div class="carousel-caption">
    <h2></h2>
</div>