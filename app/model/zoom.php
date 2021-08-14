<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    protected $table = 'zoom';

    protected $fillable = [
        'course_id',
        'lesson_id',
        'unit_id',
        'topic',
        'type',
        'join_url',
        'start_time'

    ];
    public function unit(){
        return $this->belongsTo('App\model\Unit');
    }
    public function lesson(){
        return $this->belongsTo('App\model\Lesson');
    }
    public function course()
    {
      return $this->belongsTo('App\model\Course','course_id');
    }
}
