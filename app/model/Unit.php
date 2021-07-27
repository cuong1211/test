<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';

    protected $fillable = [
      'title',
      'lesson_id',
      'zoom_id',
      'h5p_id',
      'homework_id',
      'test_id',
    ];
    public function lesson(){
        return $this->belongsTo('App\model\Lesson');
    }
    public function zoom(){
        return $this->hasOne('App\model\Zoom','unit_id');
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
