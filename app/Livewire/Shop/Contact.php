<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{


    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function render()
    {
        return view('livewire.shop.contact');
    }

    public function submit()
    {
        $this->validate();

        $messageContent = "Name: {$this->name}\nEmail: {$this->email}\n\nMessage:\n{$this->message}";
        
        Mail::raw($messageContent, function ($mail) {
            $mail->to('info@tallow-skincare.hr')
                 ->subject(__('New Contact Message from ') . $this->name);
        });

        session()->flash('success', 'Message sent successfully!');

        $this->reset();
    }
}
