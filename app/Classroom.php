<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //public $timestamps = false;
    protected $table = 'Class';
    protected $fillable = ['ClassID','ClassName','ClassGroup','ClassDetails'];
    

    
}
