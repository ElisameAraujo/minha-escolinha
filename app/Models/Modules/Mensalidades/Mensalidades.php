<?php

namespace App\Models\Modules\Mensalidades;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensalidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'atletaID',
        'tipoMensalidadeID',
        'valorMensalidade',
    ];

    protected $table = 'mensalidades';
    protected $primaryKey = 'mensalidadeID';
}
