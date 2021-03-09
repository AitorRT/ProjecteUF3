<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    use HasFactory;

    protected $fillable = ["score", "user_id", "video_id"];

    public function User(){
        return $this->belongsToMany(User::class);
    }

    public function Video(){
        return $this->belongsToMany(Video::class);
    }
    public $timestamps = false;
}
