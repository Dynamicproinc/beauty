<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ReferralTracker;

class ReferralsController extends Controller
{
    public function redirect($code)
{
    $referral = \App\Models\ReferralLink::where('referral_code', $code)->first();

    if (!$referral) {
        return redirect()->route('welcome');
    }

    // Track only the first referral click for this visitor
    if (!request()->hasCookie('referral_code')) {
        \App\Models\ReferralTracker::create([
            'referral_code' => $code,
            'ip_address'    => request()->ip(),
            'type'          => 'click',
            'status'        => 'success',
        ]);

        cookie()->queue(
            'referral_code',
            $code,
            60 * 24 * 30 // 30 days
        );
    }

    return redirect()->route('welcome');
}
}
