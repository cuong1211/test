<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    protected $table = 'exam';

    protected $fillable = [
      'name',
      'answer'
      
    ];
}