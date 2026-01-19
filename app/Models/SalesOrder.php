<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    //fillables
    protected $fillable = [
       'user_id',
       'email',
       'phone_number',
       'first_name',
       'last_name',
       'status',
       'total_amount',
       'shipping_cost',
       'discount_amount',
       'delivery_method',
       'payment_method',
       'payment_status',
       'pickup_location',
       'pickup_date',
       'country',
       'address',
       'postal_code',
       'city',
       'shipping_other',
       'first_name_other',
       'last_name_other',
       'country_other',
       'address_other',
       'postal_code_other',
       'city_other',
       'shipping_address',
       'billing_address',
       'message',
       'phone_other',
       'slug',
    ];
}
