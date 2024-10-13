<?php

namespace App\Models\Modules\Mensalidades;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMensalidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoMensalidade',
        'valorMensalidade',
        'descontoBolsa'
    ];

    protected $table = 'tipo_mensalidades';
    protected $primaryKey = 'mensalidadeID';
}
