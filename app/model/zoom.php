<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    protected $table = 'zoom';

    protected $fillable = [
        'topic',
        'type',
        'join_url',
        'start_time'

    ];
    public function unit()
    {
        return $this->hasOne('App\model\Unit');
    }
    public function course()
    {
      return $this->belongsTo('App\model\Course','course_id');
    }
}
