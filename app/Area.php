<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;
    
    protected = [
    	'area',
        'nuclei_id',
    ];

    public function nuclei()
    {
    	return $this->hasMany(Nucleus::class);
    }

    public function programs()
    {
    	return $this->hasMany(Program::class);
    }
}
