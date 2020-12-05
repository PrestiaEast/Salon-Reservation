<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
    protected $fillable = ['name', 'age', 'contact_number', 'service_reserved'];

    public function reservations(){
    	return $this->belongsTo(Reservation::class);
    }
}
