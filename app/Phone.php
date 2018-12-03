<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $timestamps = false;
	
    protected $fillable = [
    	'type', 
    	'number', 
    	'teacher_id',
    ];

    public function teacher()
    {
    	return $this->belongsTo(Teacher::class);
    }
}
