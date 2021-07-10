<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class H5p extends Model
{
    protected $table = 'h5p';

    protected $fillable = [
      'title',
      'course_id',
      'lesson_id',
      'link',
    ];
}
