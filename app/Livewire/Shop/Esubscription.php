<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\EmailSubscription;
use App\Rules\Recaptcha;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThanksSubscribe;

class Esubscription extends Component
{
    public $email;
    public $gRecaptchaResponse;

    public function render()
    {
        return view('livewire.shop.esubscription');
    }

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email|max:50|unique:email_subscriptions,email',
            'gRecaptchaResponse' => ['required', new Recaptcha()],
        ]);

        $sub = EmailSubscription::create([
            'email' => $this->email,
            'ip_address' => request()->ip(),
            'reference'=>Str::random(16),
        ]);
       
        $data = [
            'reference' => $sub->reference,
            'email' => $sub->email,
        ];
        // send thanksing email to customer
        Mail::to($this->email)->send(new ThanksSubscribe($data));

        // end email

        $this->reset();
        session()->flash('success', __('Subscription completed'));
    }
}