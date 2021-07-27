<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';

    protected $fillable = [
      'title',
      'question_id',
    ];
    public function unit(){
      return $this->belongsTo('App\model\Unit');
    }
}
