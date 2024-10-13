<?php

namespace App\Models\Configuracoes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacoesProjeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'informacao',
        'valor',
    ];

    protected $table = 'informacoes_projeto';
    protected $primaryKey = 'infoID';
}
