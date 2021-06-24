<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class zoom extends Model
{
    protected $table = 'zoom';

    protected $fillable = [
        'id',
        'topic',
        'type',
        'join_url',
        'start_time'

    ];
}
