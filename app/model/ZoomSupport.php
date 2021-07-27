<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ZoomSupport extends Model
{
    protected $table = 'zoomsupport';

    protected $fillable = [
        
        'topic',
        'class',
        'type',
        'join_url',
        'start_time'

    ];
  
}
