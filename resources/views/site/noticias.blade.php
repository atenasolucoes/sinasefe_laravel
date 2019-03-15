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

                <div class="col-sm-4" style=" width: 100%; height: 200px;margin-top: 5px; background-image: url('arquivos/{{$noticia->imagem}}'); background-size: cover; background-position: center;"></div>

                <div class="col-sm-8" style="padding:10px; text-align: justify; position: relative; ">
                  <a style=" color: darkred;" href="noticia-pagina?id={{$noticia->cod}}">
                    <h5 >{{$noticia->titulo}}</h5>
                    <p>É aqui que vai ser escrito o olho da noticia É aqui que vai ser escrito o olho da noticia É aqui que vai ser escrito o olho da noticia</p>
                </a>
            </div>


                  
               </div>
       </div>

     @endforeach


   </div>




</section>


@stop