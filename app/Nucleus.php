<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleus extends Model
{
    public $timestamps = false;
	
    protected $fillable = [
    	'nucleus', 
    	'headquarter_id',
    ];

    public function headquarter()
    {
    	return $this->belongsTo(Headquarter::class);
    }

    public function competition()
    {
        return $this->hasMany(competition::class);
    }
}
