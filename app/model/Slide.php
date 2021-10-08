<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';

    protected $fillable = [
      'title',
      'link',
    ];
    public function unit()
    {
        return $this->hasOne('App\model\Unit');
    }
}
