<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['name', 'age', 'services_reserved', 'contact_number', 'time_arrived'];
}
