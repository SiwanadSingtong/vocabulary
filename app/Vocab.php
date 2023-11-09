<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocab extends Model
{
    public $timestamps = false;
    protected $table = 'Vocabulary';
    protected $fillable = [
        'VocabularyID',
        'WorkID',
        'StudentID',
        'Vocab',
        'Choice_1',
        'Choice_2',
        'Choice_3',
        'Choice_4'
    ];
}
