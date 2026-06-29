<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PickupLocation extends Model
{
    protected $fillable = [
    'pickup_location',
    'description',
    'cost',
    'discount',
    'location'
];
}
