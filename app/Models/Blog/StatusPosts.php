<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPosts extends Model
{
    use HasFactory;

    protected $table = 'status_posts';
    protected $primaryKey = 'statusID';
    public $timestamps = false;
}
