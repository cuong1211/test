<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lesson';

    protected $fillable = [
      'name',
      'course_id'
    ];
    public function course()
    {
      return $this->belongsTo('App\model\Course','course_id');
    }
    public function unit(){
      return $this->hasOne('App\model\Unit');
    }
    public function zoom(){
        return $this->hasOne('App\model\Zoom');
      }
}
