



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
                @include('includes.slide', array('numeroImovel' => '0'))
            </div>
            <div class="item">
                @include('includes.slide', array('numeroImovel' => '1'))
            </div>
            <div class="item">
                @include('includes.slide', array('numeroImovel' => '2'))
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


