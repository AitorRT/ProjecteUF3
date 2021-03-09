<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $fillable = ["title","route","user_id"];

    public function User(){
        return $this->hasOne(User::class);
    }

    public function Score(){
        return $this->hasMany(Score::class);
    }

    public function Tag(){
        return $this->belongsToMany(Tag::class,"video_tag","tag_id");
    }
}
