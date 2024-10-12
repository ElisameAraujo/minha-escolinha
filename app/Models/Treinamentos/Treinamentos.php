<?php

namespace App\Models\Treinamentos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treinamentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeAtleta',
        'categoriaAtletaID',
        'diasSemana',
        'genero',
        'horario',
        'tipoTreinoID',
    ];

    protected $table = 'treinamentos';
    protected $primaryKey = 'treinamentoID';
}
