<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    	'first_name',
        'last_name',
        'identity',
        'address',
        'birthdate',
        'type_id', 
    	'area_id', 
    	'state_id', 
    	'countrie_id', 
    	'classification_id',  
    	'headquarters_id', 
    	'status', 
    	'observation',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    public function headquarter()
    {
        return $this->belongsTo(Headquarter::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function studies()
    {
        return $this->hasMany(Study::class)
    }
}
