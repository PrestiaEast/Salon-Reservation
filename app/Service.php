<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['employee_id', 'service_name', 'service_charge'];

    public function customers(){
    	return $this->hasMany(Customer::class);
    }

    public function employees(){
    	return $this->hasMany(Employee::class);
    }

    public function reservation(){
    	return $this->belongsTo(Reservation::class);
    }
}
