<?php

namespace App\Models\Modules\Mensagens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotivoMensagem extends Model
{
    use HasFactory;

    protected $table ='motivo_mensagens';
    protected $primaryKey = 'motivoID';
    public $timestamps = false;
}
