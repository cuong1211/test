<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exam';

    protected $fillable = [
      'name',
      'answer'

    ];
    public function unit(){
        return $this->belongsTo('App\model\Unit');
    }
}
