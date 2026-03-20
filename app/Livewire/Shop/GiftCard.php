<?php

namespace App\Livewire\Shop;

use App\Models\CardDesign;
use App\Models\GiftCardRate;
use App\Models\DigitalGiftCard;
use Illuminate\Support\Str;
use Stripe\Stripe;
use Illuminate\Validation\Rule;
use App\Service\StripeService;
use App\Mail\GiftCard as GCM;
use Illuminate\Support\Facades\Mail;

use Livewire\Component;

class GiftCard extends Component
{

    public $card_designs;
    public $gift_card_rates;
    public $design;
    public $rate;
    public $delivery_type = 'email', $email, $phone_number, $from, $to, $message_body;
    public $pre_image;



    public function render()
    {
        return view('livewire.shop.gift-card');
    }

    public function mount()
    {
        $this->card_designs = CardDesign::where('status', 'active')->get();
        $this->gift_card_rates = GiftCardRate::where('status', 'active')->get();
    }


    public function generatePreview($id){
        $desg = CardDesign::where('status', 'active')->where('id', $this->design)->first();
        $this->pre_image = $desg->file_path;

    }



    public function save()


    {
        $validated = $this->validate([
            'design'        => ['required', 'integer', 'exists:card_designs,id'],
            'email'         => ['required', 'email', 'max:255'],
            // 'phone_number'  => ['required', 'string', 'max:20'],
            'from'          => ['required', 'string', 'max:100'],
            'to'            => ['required', 'string', 'max:100'],
            'message_body'       => ['required', 'string', 'max:1000'],
            'rate'          => ['required', 'exists:gift_card_rates,amount'],
        ]);





        $code = 'GC-' . strtoupper(Str::random(12));

        $gift_card = DigitalGiftCard::create([
            'user_id' => auth()->id() ?? 0,
            'card_id' => $this->design,
            'email' => $this->email,
            'delivery_via' => $this->delivery_type,
            'phone_number' => $this->phone_number,
            'from' => $this->from,
            'to' => $this->to,
            'Message' => $this->message_body,
            'uniq_code' => Str::random(16),
            'payment_status' => 'pending',
            'status' => 'pending',
            'gift_code' => $code,
            'amount' => $this->rate,

        ]);

        

        $stripe = new StripeService;
        $stripe->stripeStart($gift_card->email, $gift_card->id, $gift_card->amount, $gift_card);

        
        //  Mail::to($gift_card->email)
        //             ->bcc('info@tallow-skincare.hr')
        //             ->send(new GCM($gift_card));

        // return redirect($stripe->url);





        // Optional: reset form
        $this->reset();

        // Optional: success message
        session()->flash('success', 'Saved successfully!');
    }
}
