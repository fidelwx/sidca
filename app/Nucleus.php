<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleus extends Model
{
    protected $fillable = [
    	'nucleus', 
    	'headquarter_id',
    ];

    public function headquarter()
    {
    	return $this->belongsTo(Headquarter::class);
    }
}
