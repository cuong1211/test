<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $table = 'lesson';

    protected $fillable = [
      'name',
      'course_id'
    ];
    public function course()
    {
      return $this->belongsToMany('App\model\course','course_lesson','course_id','lesson_id');
    }
}
