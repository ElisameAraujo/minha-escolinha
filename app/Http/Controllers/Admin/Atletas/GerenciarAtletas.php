<?php

namespace App\Http\Controllers\Admin\Atletas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GerenciarAtletas extends Controller
{
    public function index()
    {
        return view('admin.atletas.index');
    }

    public function adicionarAtleta()
    {
        return view('admin.atletas.adicionar-atleta');
    }
}
