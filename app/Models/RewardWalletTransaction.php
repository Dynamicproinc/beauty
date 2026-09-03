<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardWalletTransaction extends Model
{
    //fillables

    protected $fillable = [
        'reward_wallet_id',
        'user_id',
        'amount',
        'type',
        'description',
    ];
}
