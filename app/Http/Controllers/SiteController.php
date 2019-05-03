<?php

namespace sinasefe\Http\Controllers;

use Illuminate\Http\Request;
use sinasefe\Diretoria;

class SiteController extends Controller
{
    public function diretoria()
    {
        $diretoria = Diretoria::all();
        return view('site.diretoria')->with(compact('diretoria'));
    }
}
