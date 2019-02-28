@extends('template')

@section('conteudo')

<section class="container">
    <div>
        <p><a href="./" class="text-danger">Início</a> / Notícias</p>
        <p><h3>Notícias</h3></p>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="row">           

                <div class="col-sm-4" style=" width: 100%; height: 200px;margin-top: 5px; background-image: url('imagens/estudo.jpg'); background-size: cover;"></div>

                <div class="col-sm-8" style="padding:10px; text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur..
                <p  style="background-color: darkred; color: white; padding: 1px; text-align: center;">Leia Mais</p>
            </div>


                  
               </div>
       </div>

        <div class="col-sm-6">
            <div class="row">           

          
                <div class="col-sm-4" style=" width: 100%; height: 200px;margin-top: 5px; background-image: url('imagens/estudo.jpg'); background-size: cover;"></div>

                <div class="col-sm-8" style="padding:10px; text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur..
                <p  style="background-color: darkred; color: white; padding: 1px; text-align: center;">Leia Mais</p>
            </div>
                </div>
       </div>


   </div>




</section>


@stop