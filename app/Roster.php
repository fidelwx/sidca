<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $fillable = [
    	'num_memo','academic_lapse','date_start','date_end','hired','total','memo_url','status',
    	'area_id','headquarter_id','program_id'
    ];

    public function area(){
    	return $this->belognsTo(Area::class);
    }

    public function headquarter(){
    	return $this->belognsTo(Headquarter::class);
    }

    public function program(){
    	return $this->belognsTo(Program::class);
    }

    public function returns(){
    	return $this->hasMany(Return::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
