<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;
	
	protected $fillable = [
		'state',
		'countries_id',
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function teachers()
	{
		return $this->hasMany(Teacher::class);
	}
}
