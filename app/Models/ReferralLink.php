<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralLink extends Model
{
    //fillable fields
    protected $fillable = [
        'referral_code',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getClicks(){
        return ReferralTracker::where('referral_code', $this->referral_code)->where('type', 'click')->count();
    }

    public function getRegistrations(){
        return ReferralTracker::where('referral_code', $this->referral_code)->where('type', 'registration')->count();
    }

    public function getPurchases(){
        return ReferralTracker::where('referral_code', $this->referral_code)->where('type', 'purchase')->count();
    }

    public function getConversions(){
        return ReferralTracker::where('referral_code', $this->referral_code)->where('type', 'conversion')->count();
    }
}
