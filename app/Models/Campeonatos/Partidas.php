<?php

namespace App\Models\Campeonatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidas extends Model
{
    use HasFactory;

    protected $fillable = [
        'adversario',
        'logoAdversario',
        'dataPartida',
        'horario',
        'local',
        'categoriaAtletaID',
        'mandante',
        'campeonatoID',
        'faseCampeonato'
    ];

    protected $table = 'partidas';
    protected $primaryKey = 'partidaID';
}
