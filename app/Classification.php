<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable = [
    	'classification',
    ];

    public function teachers()
    {
    	return $this->hasMany(Teacher::class);
    }
}
