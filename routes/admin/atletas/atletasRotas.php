<?php

use App\Http\Controllers\Admin\Atletas\GerenciarAtletas;
use Illuminate\Support\Facades\Route;

/** Define uma lista de middlewares para rota **/
$middleware = [];

Route::prefix('admin/atletas')->group(function (){
    
    Route::get('todos-os-atletas', [GerenciarAtletas::class,'index'])->name('admin.atletas');
    Route::get('adicionar-atleta', [GerenciarAtletas::class,'adicionarAtleta'])->name('admin.atletas.adicionar-atleta');
});