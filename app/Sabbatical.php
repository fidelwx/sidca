<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sabbatical extends Model
{
    protected $fillable = [
    	'antiquity','date_start','date_end',
    	'reason','recognition','teacher_id'
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
