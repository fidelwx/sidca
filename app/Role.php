<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
	
    protected $fillable = [
    	'rol',
    ];
	// protected $timestamps = false;

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
