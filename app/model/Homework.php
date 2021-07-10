<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $table = 'homework';

    protected $fillable = [
      'title',
      'course_id',
      'lesson_id',
      'excel',
    ];
}
