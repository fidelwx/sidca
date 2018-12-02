<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $fillable = [
    	'headquarter', 
    ];

    public function teachers()
    {
    	return $this->hasMany(Teachers::class);
    }

    public function nucleus()
    {
    	return $this->hasMany(Nucleus::class);
    }
}
