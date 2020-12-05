<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['service_id', 'service_name', 'service_charge', 'employee_name'];

    public function customers(){
    	return $this->hasMany(Customer::class);
    }

    public function employees(){
    	return $this->hasMany(Employee::class);
    }

    public function services(){
    	return $this->hasMany(Service::class);
    }
}
