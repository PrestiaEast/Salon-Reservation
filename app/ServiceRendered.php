<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRendered extends Model
{
    protected $fillable = ['service_id', 'customer_id', 'service_name', 'service_charge', 'month'];
}
