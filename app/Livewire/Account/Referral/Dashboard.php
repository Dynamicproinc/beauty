<?php

namespace App\Livewire\Account\Referral;

use Livewire\Component;
use App\Models\ReferralLink;
use Illuminate\Support\Str;
class Dashboard extends Component
{

public $referral_link;

    public function render()
    {
        return view('livewire.account.referral.dashboard');
    }

    public function mount(){
        //load if have referral link already
       $ref = ReferralLink::where('user_id', auth()->id())->first();
        if($ref){
            $this->referral_link = $ref->referral_code;
        }

    }

    public function generateReferralLink()
    {
      $ref = ReferralLink::where('user_id', auth()->id())->first();
        if($ref){
            return null;
        }
        
        $referralLink = ReferralLink::create([
            'referral_code' =>Str::random(10),
            'user_id' => auth()->id(),
            'status' => 'active',
        ]);
        $this->referral_link = $referralLink->referral_code;
    }

    // public function generateReferralCode()
    // {
    //     return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);
    // }
}
