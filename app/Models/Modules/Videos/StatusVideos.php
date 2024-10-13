<?php

namespace App\Models\Modules\Videos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusVideos extends Model
{
    use HasFactory;

    protected $table = 'status_videos';
    protected $primaryKey = 'statusID';
    public $timestamps = false;
}
