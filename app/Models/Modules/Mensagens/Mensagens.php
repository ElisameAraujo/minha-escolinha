<?php

namespace App\Models\Modules\Mensagens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagens extends Model
{
    use HasFactory;

    protected $table ='mensagens';
    protected $primaryKey = 'mensagemID';
    protected $fillable = [
        'autor',
        'email',
        'corpoMensagem',
        'motivoMensagemID',
        'statusID'
    ];

}
