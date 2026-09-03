<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralTracker extends Model
{
  protected $fillable = [
        'referral_code',
        'ip_address',
        'type',
        'status',
    ];


    
}
