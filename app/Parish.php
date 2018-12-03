<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    public $timestamps = false;
	
	protected $fillable = [
		'parish', 'municipalities_id',
	];

	public function municipality()
	{
		return $this->belongsTo(Municipality::class);
	}

	public function teachers()
	{
		return $this->hasMany(Teacher::class);
	}
}
