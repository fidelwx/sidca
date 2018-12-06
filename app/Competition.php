<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
    	'curricular_unit','contest_date','numberhours',
    	'approval','area_id','headquarter_id','nucleus_id','teacher_id'
    ];

    public function teacher(){
    	return $this->hasMany(Teacher::class);
    }

    public function area(){
    	return $this->belongsTo(Area::class);
    }

    public function headquarter(){
    	return $this->belongsTo(Headquarter::class);
    }

    public function nucleus(){
    	return $this->belongsTo(Nucleus::class);
    }

    public function movement(){
        return $this->belongsTo(Movement::class);
    }




}
