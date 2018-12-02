<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $fillable = [
    	'parish', 'municipalities_id',
	];

	public function municipality()
	{
		return $this->belongsTo(Municipality::class);
	}
}
