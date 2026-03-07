<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingLocation extends Model
{
    protected $fillable = ['location_code', 'location', 'free_delivery', 'max_value', 'shipping_cost'];
}
