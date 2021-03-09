<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video_tag extends Model
{
    use HasFactory;

    protected $fillable = ["video_id","tag_id"];
}
