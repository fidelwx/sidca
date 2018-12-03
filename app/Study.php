<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
    	'title', 
    	'university', 
    	'grade', 
    	'teacher_id',
    ];

    public function teacher()
    {
    	return $this->belongsTo(Teacher::class);
    }
}
