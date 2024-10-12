<?php

namespace App\Models\Treinamentos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposTreinamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeTreino',
    ];

    protected $table = 'tipos_treinamentos';
    protected $primaryKey = 'tipoTreinoID';
}
