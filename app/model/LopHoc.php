<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = 'LopHoc';

    protected $fillable = [
      'Ten lop',
      'Khoa hoc'
    ];
}
