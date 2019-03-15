@extends('template')

@inject('noticias', 'sinasefe\Noticias')
<?php $not = $noticias->where('cod',$_GET['id'])->first(); ?>

@section('titulo', $not->titulo.' | ')
@section('conteudo')

<section class="container">
  
    <div>
        <p><a href="./" class="text-danger">Início</a> / <a href="noticias" class="text-danger">Notícias</a> </p>        
    </div>
    <div class="row">
    <div class="col-sm-12">
      <p><h4>{{$not->titulo}}</h4></p>
      <h5 class="text-muted">É aqui que vai ser escrito o olho da noticia É aqui que vai ser escrito o olho da noticia É aqui que vai ser escrito o olho da noticia</h5>
    </div>
    <div class="col-sm-12">
      {{$not->noticia}}
    </div>


   </div>




</section>


@stop