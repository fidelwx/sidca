<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected = [
    	'program', 
    	'area_id',
    ];

    public function area()
    {
    	return $this->belongsTo(Area::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
