<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class KhoaHoc extends Model
{
    protected $table = 'KhoaHoc';

    protected $fillable = [
      'Ten Khoa Hoc',
      'Mo Ta',
      'Thoi Gian'
    ];
}
