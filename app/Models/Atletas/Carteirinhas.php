<?php

namespace App\Models\Atletas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carteirinhas extends Model
{
    use HasFactory;

    protected $fillable = [
        'atletaID',
        'dataExpedicao',
        'dataExpiracao',
    ];

    public $timestamps = false;

    protected $table = 'responsaveis';
    protected $primaryKey = 'responsavelID';
}
