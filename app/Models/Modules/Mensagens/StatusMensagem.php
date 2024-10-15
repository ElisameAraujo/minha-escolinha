<?php

namespace App\Models\Modules\Mensagens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMensagem extends Model
{
    use HasFactory;

    protected $table = 'status_mensagens';
    protected $primaryKey = 'statusID';
    public $timestamps = false;
}
