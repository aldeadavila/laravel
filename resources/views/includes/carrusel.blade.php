



<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                @include('includes.slide')
            </div>
            <div class="item">
                <div class="fill"></div>
                <div class="carousel-caption">
                    <h2>{{ $imoveis[1]->negocio . " " . $imoveis[1]->tipo_de_imovel . " " . $imoveis[1]->cidade }}</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>{{ $imoveis[2]->negocio . " " . $imoveis[2]->tipo_de_imovel . " " . $imoveis[2]->cidade }}</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>


