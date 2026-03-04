<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\EmailSubscription;
use App\Rules\Recaptcha;

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

        EmailSubscription::create([
            'email' => $this->email,
            'ip_address' => request()->ip(),
        ]);

        session()->flash('success', __('Subscription completed'));
    }
}