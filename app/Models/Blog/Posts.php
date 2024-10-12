<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'tituloPost',
        'conteudo',
        'resumo',
        'categoriaID',
        'statusID',
        'userID',
        'slugPost',
        'postCover'
    ];
    protected $table = 'posts';
    protected $primaryKey = 'postID';
}
