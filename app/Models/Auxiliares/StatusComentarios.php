<?php

namespace App\Models\Auxiliares;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusComentarios extends Model
{
    use HasFactory;

    protected $table = 'status_comentario';
    protected $primaryKey = 'statusID';
    public $timestamps = false;
}
