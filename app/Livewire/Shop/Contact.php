<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Rules\Recaptcha;

class Contact extends Component
{


    public $name;
    public $email;
    public $message;
    public $gRecaptchaResponse;

    // protected $rules = [

    // ];

    public function render()
    {
        return view('livewire.shop.contact');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'gRecaptchaResponse' => ['required', new Recaptcha()],
        ]);

        $messageContent = "Name: {$this->name}\nEmail: {$this->email}\n\nMessage:\n{$this->message}";

        Mail::raw($messageContent, function ($mail) {
            $mail->to('info@tallow-skincare.hr')
                ->subject(__('New Contact Message from ') . $this->name);
        });

        session()->flash('success', __('Your message has been sent successfully! We will get back to you soon.'));

        $this->reset();
    }
}
