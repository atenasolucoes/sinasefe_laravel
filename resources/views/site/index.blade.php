@extends('template')

@section('conteudo')

<section class="container-fluid">

    <div class="row">
        <div class="col-sm-7">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators" style="bottom: 25px;">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src="imagens/slide/plena.png" alt="Los Angeles" width="100%" height="100%">
                        <p style="background-color: darkred; color: white">LEGENDA</p>
                    </div>
                    <div class="carousel-item text-center">
                        <img src="imagens/slide/plena.png" alt="Chicago" width="100%" height="100%">
                        <p style="background-color: darkred; color: white">LEGENDA</p>
                    </div>
                    <div class="carousel-item text-center">
                        <img src="imagens/slide/plena.png" alt="New York" width="100%" height="100%">
                        <p style="background-color: darkred; color: white">LEGENDA</p>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>


            </div>

        </div>

        <style type="text/css">
        .minibanner{
            margin-bottom: 10px;
        }
    </style>

    <div class="col-sm-5 container-fluid" >
        <div class="row" style="padding: 0px;">
            <div class="col text-center" >
                <img class="minibanner" src="imagens/assessoriajuridica.jpg" style="width: 100%; max-width: 100%;">
            </div>
            <div class="col text-center" >
                <img class="minibanner" src="imagens/atasreuniao.jpg" style="width:100%; max-width: 100%;">
            </div>
        </div>  
        <div class="row" style="padding: 0px;">
            <div class="col text-center" >
                <img class="minibanner" src="imagens/prestacao.jpg" style="width: 100%; max-width: 100%;">
            </div>
            <div class="col text-center" >
                <img class="minibanner" src="imagens/assessoriajuridica.jpg" style="width:100%; max-width: 100%;">
            </div>
        </div>

    </div>

</div>
</div>

</section>


@stop