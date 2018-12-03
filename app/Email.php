<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
    	'email',
    	'teacher_id',
    ];

    public function teacher()
    {
    	return $this->belongsTo(Teacher::class);
    }

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
