<?php

namespace App\Models\Campeonatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adversarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'adversarioNome',
        'adversarioLogo',
    ];

    protected $table = 'adversarios';
    protected $primaryKey = 'adversarioID';
}
