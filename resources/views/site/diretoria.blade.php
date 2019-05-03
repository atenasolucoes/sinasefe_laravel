@extends('template')

@section('conteudo')

<section class="container">

    <div>
        <p><a href="./" class="text-danger">Início</a> / Diretoria</p>
        <p>
            <h3>Diretoria</h3>
        </p>
    </div>
    <div class="conteudo">
        <h1>DA ESTRUTURA ORGANIZACIONAL E ADMINISTRATIVA</h1>

        <p><b>ASSEMBLEIA GERAL (AG)</b> - Instância máxima de deliberação da Seção Sindical, constituida por todos os filiados e filiadas quites com suas obrigações regimentais, com direito a voz e voto.</p>

        <p><b>DIRETORIA EXECUTIVA (DIREX)</b> - Instância administrativa, com mandato de dois anos, composta colegiadamente de 06 (seis) diretores titulares e 06 suplentes:<br><br>
            @foreach($diretoria as $d)
            @if($d->cod_diretoria == 1)
            <b>Coordenação Geral</b> <br>
            <i>Titular: <?php echo $d->titular; ?></i> <br>
            <i>Suplente: <?php echo $d->suplente; ?></i> <br>
            @elseif($d->cod_diretoria == 2)
            <b>Secretaria</b> <br>
            <i>Titular: <?php echo $d->titular; ?></i> <br>
            <i>Suplente: <?php echo $d->suplente; ?></i> <br>
            @elseif($d->cod_diretoria == 3)
            <b>Tesouraria</b> <br>
            <i>Titular: <?php echo $d->titular; ?></i> <br>
            <i>Suplente: <?php echo $d->suplente; ?></i> <br>
            @elseif($d->cod_diretoria == 4)
            <b>Política e Formação Sindical</b> <br>
            <i>Titular: <?php echo $d->titular; ?></i> <br>
            <i>Suplente: <?php echo $d->suplente; ?></i> <br>
            @elseif($d->cod_diretoria == 5)
            <b>Informação e Comunicação</b> <br>
            <i>Titular: <?php echo $d->titular; ?></i> <br>
            <i>Suplente: <?php echo $d->suplente; ?></i> <br>
            @elseif($d->cod_diretoria == 6)
            <b>Assuntos Legislativos e Jurídicos</b><br>
            <i>Titular: <?php echo $d->titular; ?></i> <br>
            <i>Suplente: <?php echo $d->suplente; ?></i> <br>
            @endif
            @endforeach
        </p>


        <p><b>CONSELHO FISCAL (CF)</b> - Instância de fiscalização, constituida de 03 (três) membros titulares e 03 suplentes, com mandato de dois anos.</p>

    </div>
    </div>




</section>



@stop