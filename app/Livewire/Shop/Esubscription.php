<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\EmailSubscription;
use Illuminate\Support\Facades\Http;
use App\Rules\Recaptcha;

class Esubscription extends Component
{
    public $email, $ip_address, $recaptchaToken;

    public function render()
    {
        return view('livewire.shop.esubscription');
    }

    public function subscribe(){
        $this->validate([
           'email' => 'required|email|max:50|unique:email_subscriptions,email',
             'g-recaptcha-response' => ['required', new Recaptcha()],
        ]);
        

       $subs = EmailSubscription::create([
            'email' => $this->email,
            'ip_address' => $this->ip()
       ]);

       if($subs){
        return redirect()->back()->with('success', __('Subscription completed'));
       }
    }
}
