<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\EmailSubscription;
use Illuminate\Support\Facades\Http;

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
              'recaptchaToken' => 'required'
        ]);
         $response = Http::asForm()->post(
        'https://www.google.com/recaptcha/api/siteverify',
        [
            'secret' => env('RECAPTCHA_SITE_KEY'),
            'response' => $this->recaptchaToken,
            'remoteip' => request()->ip(),
        ]
    );

    if (! $response->json('success') || $response->json('score') < 0.5) {
        $this->addError('recaptcha', 'Spam detected.');
        return;
    }
        

       $subs = EmailSubscription::create([
            'email' => $this->email,
            'ip_address' => $this->ip()
       ]);

       if($subs){
        return redirect()->back()->with('success', __('Subscription completed'));
       }
    }
}
