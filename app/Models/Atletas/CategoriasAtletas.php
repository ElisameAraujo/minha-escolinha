<?php

namespace App\Models\Atletas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasAtletas extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoriaAtleta',
        'genero',
    ];

    public $timestamps = false;

    protected $table = 'categorias_atletas';
    protected $primaryKey = 'categoriaAtletaID';
}
