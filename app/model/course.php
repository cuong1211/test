<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = [
      'name',
      'start_time',
      
    ];
    public function lesson()
    {
      return $this->hasMany('App\model\Lesson','course_id','id');
    }
    
}
