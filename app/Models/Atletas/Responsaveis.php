<?php

namespace App\Models\Atletas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsaveis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeResponsavel',
        'email',
        'telefoneContato',
        'atletaID',
    ];

    protected $table = 'responsaveis';
    protected $primaryKey = 'responsavelID';
}
