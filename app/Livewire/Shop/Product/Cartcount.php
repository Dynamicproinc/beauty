<?php

namespace App\Livewire\Shop\Product;

use Livewire\Component;

class Cartcount extends Component
{
    public $cart_items;
    public $total_quantity;
    public $total_sum;
     public $listeners = ['refreshCartNav' => 'refreshData'];

    public function render()
    {
        return view('livewire.shop.product.cartcount');
    }

    public function mount(){
        $this->refreshItem();
        $this->calculateTotalSum();
    }


    public function refreshData(){
        $this->refreshItem();
        $this->calculateTotalSum();
    }
    public function refreshItem(){
         $this->cart_items = session('cart', []);
         $this->total_quantity = 0;
        foreach($this->cart_items as $item){
            $this->total_quantity += $item['quantity'];
        }
        return $this->total_quantity;
    }

     public function calculateTotalSum(){
         $this->cart_items = session('cart', []);
        $this->total_sum = 0;
        foreach($this->cart_items as $item){
            $this->total_sum += $item['price'] * $item['quantity'];
        }
        return $this->total_sum;
    }
}
