<?php

namespace App\Models\Atletas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosicoesJogador extends Model
{
    use HasFactory;

    protected $fillable = [
        'posicao',
        'siglaPosicao',
        'classePosicao',
        'esporte',
    ];

    protected $table = 'posicoes_jogador';
    protected $primaryKey = 'posicaoID';
}
