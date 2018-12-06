<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
    	'types','time', 'modality','recognition','teacher_id'
    ];

    public function teacher(){
    	return $this->belognsTo(Teacher::class);
    }
}
