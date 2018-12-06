<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substitution extends Model
{
    protected $fillable = [
    
    'teacher_replacement','teacher_replace','roster_id'
	];

	public function roster(){
		return $this->belognsTo(Roster::class);
	}

	public function movement(){
		return $this->belognsTo(Movement::class);
	}

}
