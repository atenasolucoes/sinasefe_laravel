@extends('template')

@section('conteudo')

<section class="container-fluid">
@inject('noticias', 'sinasefe\Noticias')
<?php $not = $noticias->where('categoria','noticia')->orderby('cod','desc')->take(10)->get(); ?>
    <div class="row">
        <div class="col-sm-6">
            <div id="demo" class="carousel slide" data-ride="carousel" >

                <!-- Indicators -->
                <ul class="carousel-indicators" style="bottom: 25px;">
                    @for($i=0; $i < count($not) ; $i++)                       
                   
                    <li data-target="#demo" data-slide-to="{{$i}}" @if($i == 0)class="active"@endif></li>
                    @endfor
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner" >
                    <?php $j = 0 ?>
                    @foreach($not as $noticia)
                    <?php $j++; ?>
                   
                    <div class="carousel-item  text-center   @if($j == 1) active @endif" style="height: 100%">  

                        <a href="noticia-pagina?id={{$noticia->cod}}"><img src="arquivos/{{$noticia->imagem}}" alt="Los Angeles" style="width: 100%;"> </a>                
                       
                        <p style="background-color: darkred; color: white"><a href="noticia-pagina?id={{$noticia->cod}}" style="text-decoration: none; color: white;">{{$noticia->legenda}}</a></p> 
                    </div>
                    
                   

                    @endforeach
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

    <div class="col-sm-6 container-fluid" >
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