<?php

namespace App\Livewire\Shop;

use Livewire\Component;

class Checkout extends Component
{
    public $total = 0;
    public $final_total=0;
    public $ship = 20;
    public $disc = 0;

    public function render()
    {
        return view('livewire.shop.checkout');
    }

    public function mount(){
        $this->calcTotal();
    }

    function calcTotal(){
        $cart = session('cart', []);
       

        foreach($cart as $item){
            $this->total += $item['price'] * $item['quantity']; 
        }
        if($this->total > 100){
            $this->ship = 0;
        }
        $this->final_total = ($this->total + $this->ship) - $this->disc;
    }

}
