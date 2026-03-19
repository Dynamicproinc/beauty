<?php

namespace App\Livewire\Shop;
use App\Models\CardDesign;
use App\Models\GiftCardRate;

use Livewire\Component;

class GiftCard extends Component
{

    public $card_designs;
    public $gift_card_rates;
    public $design;
    public $rate;
    


    public function render()
    {
        return view('livewire.shop.gift-card');
    }

    public function mount(){
        $this->card_designs = CardDesign::where('status', 'active')->get();
        $this->gift_card_rates = GiftCardRate::where('status', 'active')->get();
       

    }

}
