<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoriaNome',
        'categoriaSlug'
    ];

    protected $table = 'categorias';
    protected $primaryKey = 'categoriaID';
}
