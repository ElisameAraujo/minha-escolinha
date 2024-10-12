<?php

namespace App\Models\Atletas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atletas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeAtleta',
        'dataNascimento',
        'documento',
        'matricula',
        'carteirinhaID',
        'categoria',
        'email',
        'telefone',
        'foto',
        'responsavelID',
        'fotoPerfil'
    ];

    protected $table = 'atletas';
    protected $primaryKey = 'atletaID';
}
