<?php

namespace App\Models\Campeonatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonatos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeCampeonato',
        'ano'
    ];

    protected $table = 'campeonatos';
    protected $primaryKey = 'campeonatoID';
}
