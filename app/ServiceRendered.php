<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRendered extends Model
{
	protected $table = 'servicerendereds';
    protected $fillable = ['service_id', 'date'];

    public function services(){
    	return $this->hasMany(Service::class);
    }
}
