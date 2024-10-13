<?php

namespace App\Models\Modules\Mensalidades;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensalidades extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'atletaID',
        'tipoMensalidadeID',
        'valorMensalidade',
    ];

    protected $table = 'mensalidades';
    protected $primaryKey = 'mensalidadeID';
=======
>>>>>>> 1f0256ce6495ac5879157e5892828a0906a35ea4
}
