<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'age', 'contact_number'];

    public function customers(){
    	return $this->hasMany(Customer::class);
    }

    public function services(){
    	return $this->hasMany(Service::class);
    }
}
