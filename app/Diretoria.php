<?php

namespace sinasefe;

use Illuminate\Database\Eloquent\Model;

class Diretoria extends Model
{
    protected $table = 'diretoria';

    public $timestamps = false;

    protected $fillable = ['nome_diretoria', 'titular', 'suplente'];
}
