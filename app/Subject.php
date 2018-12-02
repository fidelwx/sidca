<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    	'subject', 
    	'level', 
    	'theoretical_hour', 
    	'practical_hour', 
    	'program_id',
    ];

    public function program()
    {
    	return $this->belongsTo(Program::class);
    }
}
