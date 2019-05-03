<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/imagens/icone.png" />
    <title>@yield('titulo')SINASEFE - IF SERTAO-PE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bs/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="/css/responsivo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/bs/js/bootstrap.min.js"></script>
    <script src="/bs/js/bootstrap.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</head>



<body style="margin: 0px;">

    <header class="container-fluid">
        <div class="row" style=" background-color: darkred; color: white;">
            <div class="col-sm-7 tel-email" style="padding-top:3px;">
                (87) 98812-1921 | sinasefe@ifsertao-pe.edu.br
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-3 text-center " style="background: white;padding: 0px;">
                        <a href="#" class="btn btn-light" style="text-decoration: none; color: darkred;  padding-top:3px; width: 100%; border-radius: 0px; height: auto; margin: 0px;">FILIE-SE</a>
                    </div>
                    <div class="col-sm-9 text-center">
                        <div class="row" style="padding-top:3px;">
                            <div class="col-sm-7 redes-sociais rs">
                                <ul>
                                    <a href="https://www.facebook.com/sinasefesertaope/" target="_blank">
                                        <li><img src="imagens/face.png" style="  filter: brightness(0) invert(1);"></li>
                                    </a>
                                    <a href="http://www.instagram.com/sinasefesertaope" target="_blank">
                                        <li><img src="imagens/insta.png" style="  filter: brightness(0) invert(1);"></li>
                                    </a>
                                    <a href="https://www.twitter.com/sinasefesertaope/" target="_blank">
                                        <li><img src="imagens/twitter.png" style="  filter: brightness(0) invert(1);"></li>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UC00xQmSzJSxdQtsNSSfBQSA/" target="_blank">
                                        <li><img src="imagens/youtube.png" width="80px" style="  filter: brightness(0) invert(1);"></li>
                                    </a>
                                    <a href="http://web.whatsapp.com" target="_blank">
                                        <li><img src="imagens/whats.png" width="80px" style="  filter: brightness(0) invert(1);"></li>
                                    </a></ul>
                            </div>
                            <div class="col-sm-5">
                                <a href="#" data-toggle="modal" data-target="#login" style="text-decoration: none; color: white; vertical-align: middle; "><i class="material-icons" style="font-size: 15px; ">lock</i>Área do Filiado</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-5" style="text-align: center; background-color: white">
                <a href="./" class="" style="">
                    <img class="img-rp" src="imagens/logo.png" style="width: 450px; max-width: 100%;">
                </a>
            </div>
            <div class="col-sm-7" style="text-align: center; background-color: white; margin-top: 3%;">

                <nav class="navbar navbar-expand-md justify-content-center">
                    <!-- Brand -->

                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler btn-block" style="background-color: darkred; color: white;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        MENU
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-center " id="collapsibleNavbar">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="./">Início</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Institucional
                                </a>
                                <div class="dropdown-menu">
                                    <a class="nav-link" href="/quemsomos">Quem somos</a>
                                    <a class="nav-link" href="/diretoria">Diretoria</a>
                                    <a class="nav-link" href="#">Regime Interno</a>
                                    <a class="nav-link" href="#">Estatuto</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Notícias
                                </a>
                                <div class="dropdown-menu">
                                    <a class="nav-link" href="noticias">Últimas Notícias</a>
                                    <a class="nav-link" href="#">Parecer Juridíco</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Comunicação
                                </a>
                                <div class="dropdown-menu">
                                    <a class="nav-link" href="#">Agenda</a>
                                    <a class="nav-link" href="#">Vídeos</a>
                                    <a class="nav-link" href="#">Podcast</a>
                                    <a class="nav-link">Jornal Eletrônico</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Fale Conosco
                                </a>
                                <div class="dropdown-menu">
                                    <a class="nav-link" href="#">Contato</a>
                                    <a class="nav-link" href="#">Chat</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>

            </div>

            <style type="text/css">
                .navbar-nav .nav-item .nav-link {
                    transition: 0.5;
                    color: darkred;
                }

                .navbar-nav .nav-item .nav-link:hover {
                    background-color: darkred;
                    transition: 0.5;
                    color: white;

                }
            </style>



        </div>



    </header>
    <hr>


    @yield('conteudo')


    <footer class="rodape">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-4">
                    <div class="redes-sociais siganos">
                        <h1>Siga-nos</h1>

                        <iframe title="facebook" src="http://www.facebook.com/connect/connect.php?href=http://www.facebook.com/sinasefesertaope&amp;connections=12&amp;header=false&amp;height=317" style="overflow: hidden;width: 100%; height:225px; border: none; margin-top: 10px;"></iframe>
                        <!--   
                        <div class="face"><img src="imagens/face.png" style="  filter: brightness(0) invert(1);"></div>
                         <div class="insta"><img src="imagens/insta.png" style="  filter: brightness(0) invert(1);"></div>
                          <div class="youtube"><img src="imagens/youtube.png" style="  filter: brightness(0) invert(1);"></div>
                           <div class="whats"><img src="imagens/whats.png" style="  filter: brightness(0) invert(1);"></div>-->



                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="contato">
                        <h1>Fale Conosco</h1>

                        <ul>
                            <li>
                                <div class="icones"> <i class="material-icons">explore</i></div> Av. Souza Filho, Nº 842, Galeria Alameda Center, Sala 104, 1º andar, Centro - Petrolina/PE
                            </li>
                            <li>
                                <div class="icones"><i class="material-icons">stay_current_portrait</i></div> (87) 98812-1921
                            <li>
                                <div class="icones"></div>Estamos no Whatsapp das 13h às 17h, de segunda à sexta-feira
                            </li>
                            <li>
                                <div class="icones"><i class="material-icons">public</i></div> sinasefe@ifsertao-pe.edu.br
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="sobre">
                        <h1>Links Importantes</h1>
                        <center>
                            <a href="http://www.sinasefe.org.br/" target="_blank"><img src="imagens/sinasefe.png" style="width:100px; margin:5px; ">
                                <a href="http://www.ifsertao-pe.edu.br/" target="_blank"><img src="imagens/if.png" style="width: 200px; margin:5px;"></a>
                                <!--<a href="http://www.mec.gov.br/" target="_blank"><img src="imagens/mec.png" style="width: 130px; margin:5px;"></a>-->
                            </a>

                        </center>

                    </div>
                </div>
            </div>
            <p> <a href="#" data-toggle="modal" data-target="#login-adm" style="text-decoration: none; color: white; vertical-align: middle; float: right; "><i class="material-icons" style="font-size:40px; ">lock</i></a></p>
        </div>
        <div class="desenvolvimento" style="padding: 5px; height: auto;">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 sinasefe" style="color: white;">
                    Copyright © <?php $data = date("Y");
                                echo $data; ?> - SINASEFE IF SERTÃO-PE - Todos os direitos reservados.

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 atena" style="color: white; text-align: right;">
                    Desenvolvimento: ATENA SOLUÇÕES CRIATIVAS

                </div>
            </div>
        </div>

    </footer>

    <div class="modal fade " id="login">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3>Área do Filiado</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <input type="text" name="" class="form-control" placeholder="Matricula Siape"><br>
                        <input type="password" name="" class="form-control" placeholder="Senha">
                        <br><button class="btn btn-block btn-light" style="background-color: darkred; color: white;">Login</button>
                    </form>
                    <br>
                    <p>Ainda não possui cadastro?</p>
                    <p><a href="" class="btn-dark btn ">CADASTRA-SE</a></p>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Continuar no site</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="login-adm">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3>Área Administrativa</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <input type="text" name="" class="form-control" placeholder="Matricula Siape"><br>
                        <input type="password" name="" class="form-control" placeholder="Senha">
                        <br><button class="btn btn-block btn-light" style="background-color: darkred; color: white;">Login</button>
                    </form>
                    <br>
                    <p>Ainda não possui cadastro?</p>
                    <p><a href="" class="btn-dark btn ">CADASTRA-SE</a></p>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Continuar no site</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        @media screen and (max-width: 800px) {
            div.rs {
                display: none;
            }

            .tel-email {
                text-align: center;
            }
        }
    </style>
</body>

</html>