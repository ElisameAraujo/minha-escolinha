<?php

namespace App\Models\Campeonatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaseCampeonatos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeFase',
        'nomeFaseCurto',
    ];

    protected $table = 'fase_campeonatos';
    protected $primaryKey = 'faseID';
    public $timestamps = false;
}
