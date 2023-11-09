<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $timestamps = false;
    protected $table = 'Choice';
    protected $fillable = [
        'ChoiceID',
        'VocabularyID',
        'Vocab',
        'Choice_1',
        'Choice_2',
        'Choice_3',
        'Choice_4',
        'Answer'
    ];
}