<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Return extends Model
{
    protected $fillable = [
    	'observation','roster_id'
    ];

    public function roster(){
    	return $this->belognsTo(Roster::class);
    }
}
