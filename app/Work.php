<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //public $timestamps = false;
    protected $table = 'Work';
    protected $fillable = [
        'WorkID',
        'WorkWeek',
        'WorkDescription',
        'ClassID',
        'created_at'
    ];
}
