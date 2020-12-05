<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['reservation_id', 'name', 'age', 'contact_number', 'services_reserved', 'time_arrived'];

    public function reservations(){
    	return $this->belongsTo(Reservation::class);
    }
}
