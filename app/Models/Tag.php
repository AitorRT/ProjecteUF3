<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;

    protected $fillable = ["tag"];

    public function Video(){
        return $this->belongsToMany(Video::class,"videos_tag", "video_id");
    }
}
