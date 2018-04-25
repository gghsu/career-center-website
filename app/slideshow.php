<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slideshow extends Model
{
    /*protected $table = 'slideshows';*/
    protected $fillable = [
        'id','title', 'url', 'start_at', 'stop_at', 'path', 'creat_at', 'update_at'
    ];
}
