<?php

namespace App\Models\Modules\GaleriaFotos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'albumTitulo',
        'albumCapa',
    ];

    protected $table = 'albuns';
    protected $primaryKey = 'albumID';
}
