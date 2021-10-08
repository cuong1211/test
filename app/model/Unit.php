<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';

    protected $fillable = [
      'title',
      'course_id',
      'zoom_id',
      'slide_id',
      'homework_id',
      'test_id',
    ];
    public function course()
    {
      return $this->belongsTo('App\model\Course','course_id');
    }
    public function zoom(){
        return $this->belongsTo('App\model\Zoom');
    }
    public function slide(){
        return $this->belongsTo('App\model\Slide');
    }
    public function test(){
        return $this->hasOne('App\model\Test','unit_id');
    }
    public function homework(){
        return $this->HasMany('App\model\Homework','unit_id','homework_id');
    }
    public function exam(){
        return $this->HasMany('App\model\Exam','unit_id','exam_id');
    }
}
