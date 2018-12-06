<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
    	'area_origin','area_destination',
    	'teacher_id'
    ];

    public function teacher(){
    	return $this->belognsTo(Teacher::class);
    }

    public function movement(){
    	return $this->belognsTo(Movement::class);
    }
}
