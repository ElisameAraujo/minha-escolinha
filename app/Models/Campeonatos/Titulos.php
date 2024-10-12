<?php

namespace App\Models\Campeonatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulos extends Model
{
    use HasFactory;

    protected $fillable = [
        'campeonatoNome',
        'anoTitulo',
        'categoriaAtletaID',
        'genero',
    ];

    protected $table = 'titulos';
    protected $primaryKey = 'tituloID';
}
