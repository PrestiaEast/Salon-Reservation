<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = ['customer_id', 'service_id', 'employee_id', 'reservation_time'];

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
