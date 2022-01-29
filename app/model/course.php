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
    public function unit()
    {
      return $this->hasMany('App\model\Unit','course_id','id');
    }
    public function zoom()
    {
      return $this->hasMany('App\model\Zoom','course_id','id');
    }

}
