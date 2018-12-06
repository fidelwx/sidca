<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCommission extends Model
{
     protected $fillable= [
    	'type',
        'name_comitent',
        'lapse',
        'date_start',
        'date_end',
        'recognition',
        'teacher_id',
    ];


    public function teacher(){
    	return $this->belognsTo(Teacher::class);
    }

    public function movement(){
        return $this->belognsTo(Movement::class);
    }
}
