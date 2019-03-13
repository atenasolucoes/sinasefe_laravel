<?php

namespace sinasefe;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $table = 'site_noticias';

    public $timestamps = false;

    protected $fillable = ['cod', 'titulo', 'noticia', 'data', 'hora', 'imagem', 'categoria', 'legenda'];
}
