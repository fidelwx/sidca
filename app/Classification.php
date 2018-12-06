<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    public $timestamps = false;
	
    protected $fillable = [
    	'classification',
    ];

    public function teachers()
    {
    	return $this->hasMany(Teacher::class);
    }
    public function anexes()
    {
        // asensos
    	return $this->hasMany(Annexes::class);
    }
}
