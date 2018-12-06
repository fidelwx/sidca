<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annexes extends Model
{
	protected $fillable = [
    	'article',
        'college',
        'title_obtined',
        'title_work',
        'recognition',
        'classification_id',
        'teacher_id'
    ];
    
    public function classifications()
    {
    	return $this->belognsTo(Classification::class);
    }

    public function teachers()
    {
    	return $this->belognsTo(Teacher::class);
    }
}
