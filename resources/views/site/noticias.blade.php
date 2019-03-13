@extends('template')

@section('conteudo')

<section class="container">
    @inject('noticias', 'sinasefe\Noticias')
<?php $not = $noticias->where('categoria','noticia')->orderby('cod','desc')->take(10)->get(); ?>
    <div>
        <p><a href="./" class="text-danger">Início</a> / Notícias</p>
        <p><h3>Notícias</h3></p>
    </div>
    <div class="row">
       @foreach($not as $noticia)
       <div class="col-sm-6">
            
            <div class="row">           

                <div class="col-sm-4" style=" width: 100%; height: 200px;margin-top: 5px; background-image: url('arquivos/{{$noticia->imagem}}'); background-size: cover;"></div>

                <div class="col-sm-8" style="padding:10px; text-align: justify; position: relative; ">
                    <h4>{{$noticia->titulo}}</h4>
                <p  style="background-color: darkred; color: white; padding: 1px; text-align: center; position: absolute; bottom: 0px; right: 10px;">Leia Mais</p>
            </div>


                  
               </div>
       </div>

     @endforeach


   </div>




</section>


@stop