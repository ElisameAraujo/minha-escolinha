<?php

namespace App\Models\Equipe;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoutsGols extends Model
{
    use HasFactory;

    protected $fillable = [
        'atletaID',
        'gols',
        'dataGols',
    ];

    protected $table = 'scout_gols';
    protected $primaryKey = 'scoutID';
}
