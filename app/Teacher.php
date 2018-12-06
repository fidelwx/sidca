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
        'crh_id', 
        'roster_id', 
        'area_id', 
        'state_id', 
        'countrie_id', 
        'classification_id',  
        'headquarter_id', 
        'status', 
        'observation',    ];

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
        return $this->belongsTo(Headquarter::class, 'headquarter_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
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

    public function competition(){
        return $this->belongsTo(Competition::class);
    }

    public function permmissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function sabbaticals()
    {
        return $this->hasMany(Sabbatical::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

    public function roster()
    {
        return $this->belognsTo(Roster::class);
    }

    public function crh()
    {
        return $this->belognsTo(Crh::class);
    }
}
