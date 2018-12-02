<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
    	'state',
    	'countries_id',
    ];

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}
