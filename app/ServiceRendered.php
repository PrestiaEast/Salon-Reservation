<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRendered extends Model
{
   protected $fillable = ['service_id', 'customer_id', 'month', 'service_charge'];
}
