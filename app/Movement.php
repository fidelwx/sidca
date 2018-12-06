<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
	protected $fillable = [
		'substitution_id','coompetition_id','annexes_id',
		'service_commission_id','permission_id','sabbatical_id','transfer_id'
	];

    public function competitions(){
    	return $this->hasMany(Competition::class);
    }

    public function annexes(){
    	return $this->hasMany(Annexes::class);
    }

    public function commissions(){
    	return $this->hasMany(ServiceCommission::class);
    }

    public function permissions(){
    	return $this->hasMany(Permission::class);
    }

    public function substitutions(){
        return $this->hasMany(Substitution::class);
    }

    public function sabbaticals(){
        return $this->hasMany(Sabbatical::class);
    }

    public function transfers(){
        return $this->hasMany(Transfer::class);
    }
}
