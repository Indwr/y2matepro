<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoRecord extends Model
{
    protected $table = 'video_record';
    protected $fillable = ['video_id','video_data'];
}
