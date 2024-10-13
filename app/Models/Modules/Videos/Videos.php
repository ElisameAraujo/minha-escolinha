<?php

namespace App\Models\Modules\Videos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    protected $fillable = [
        'tituloVideo',
        'descricaoVideo',
        'publicadoEm',
        'thumbnail',
        'statusID',
        'slug',
    ];
    protected $table = 'videos';
    protected $primaryKey = 'videoID';
}
