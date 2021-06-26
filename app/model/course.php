<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';

    protected $fillable = [
      'name',
      'start_time',
    ];
    
}
