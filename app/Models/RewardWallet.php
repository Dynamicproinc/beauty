<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardWallet extends Model
{
    //fillable
    protected $fillable = [
        'user_id',
        'balance',
        'status',
        'expiry_date',
    ];

    protected $casts = [
    'expiry_date' => 'date',
];
}
