<?php

namespace App\Models\Equipe;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    use HasFactory;

    protected $fillable = [
        'partidaID',
        'mandante',
        'visitante',
        'eMandante',
        'campeonatoID'
    ];

    protected $table = 'resultados';
    protected $primaryKey = 'resultadoID';
}
