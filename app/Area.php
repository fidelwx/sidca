<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;
    
    protected $fillable= [
    	'area',
        'nuclei_id',
        'dean',
        'code',
        'resolution'
    ];

    public function nuclei()
    {
    	return $this->hasMany(Nucleus::class);
    }

    public function programs()
    {
    	return $this->hasMany(Program::class);
    }

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }

    public function subject()
    {
        // unidad curricular
        return $this->hasMany(Subject::class);
    }

    public function rosters(){
        return $this->hasMany(Roster::class);
    }
}
