<?php

namespace App\Livewire\Shop;

use Livewire\Component;

class Cartbutton extends Component
{

    public $count;
    public $listeners = ['refresh_navbar' => 'refreshCount'];
    public function render()
    {
        return view('livewire.shop.cartbutton');
    }

    public function mount(){

    if($cart = session('cart', [])){
        $tot = 0;
       foreach($cart as $item){
            $tot = $tot + $item['quantity'];
       }
       $this->count = $tot;
    }

    
    }
    public function refreshCount(){
     if($cart = session('cart', [])){
        $tot = 0;
       foreach($cart as $item){
            $tot = $tot + $item['quantity'];
       }
        $this->count = $tot;
    }

    }
}
