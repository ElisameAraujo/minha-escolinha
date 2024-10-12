<?php

namespace App\Models\Campeonatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amistosos extends Model
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
    ];

    protected $table = 'amistosos';
    protected $primaryKey = 'amistosoID';
}
