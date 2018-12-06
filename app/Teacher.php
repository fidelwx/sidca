<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps = false;

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
        'parish_id',
        'municipality_id',

    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
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

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function parish()
    {
        return $this->belongsTo(Parish::class);
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
        return $this->hasMany(Study::class);
    }

    public function annexes()
    {
        return $this->hasMany(Annexes::class);
    }

    public function commision(){
        return $this->hasOne(ServiceCommission::class);
    }
}
