<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
    	'municipality',
        'state_id',
    ];

    public function state()
    {
    	return $this->belongsTo(State::class);
    }

    public function parishes()
    {
    	return $this->hasMany(Parish::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }    
}
