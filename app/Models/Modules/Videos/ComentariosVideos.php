<?php

namespace App\Models\Modules\Videos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosVideos extends Model
{
    use HasFactory;

    protected $fillable = [
        'autor',
        'email',
        'comentario',
        'statusComentario',
        'videoID',
    ];
    protected $table = 'comentarios_videos';
    protected $primaryKey = 'comentarioID';
}
