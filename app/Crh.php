<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crh extends Model
{
	protected $fillable = [
		'name','program_id'
	];

    public function nucleus()
    {
        return $this->belongsTo(Nucleus::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }



    // modificar
}
