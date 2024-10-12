<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosPosts extends Model
{
    use HasFactory;

    protected $fillable = [
        'autor',
        'email',
        'comentario',
        'statusComentario',
        'postID',
    ];
    protected $table = 'comentarios_posts';
    protected $primaryKey = 'comentarioID';
}
