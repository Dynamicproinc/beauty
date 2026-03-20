<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DigitalGiftCard extends Model
{
    protected $fillable = [
        'user_id', 'card_id', 'email', 'delivery_via', 'phone_number', 'from', 'to', 'message', 'uniq_code', 'payment_status', 'status','gift_code', 'stripe_session_id', 'amount'
    ];
}
