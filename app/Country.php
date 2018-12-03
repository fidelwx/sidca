<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
    	'country',
    ];

    public function teachers()
    {
    	return $this->hasMany(Teacher::class);
    }

    public function states()
    {
    	return $this->hasMany(State::class);
    }
}
