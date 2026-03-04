<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\categories;
use App\Models\Product;

class All extends Component
{

    public $categories;

    public function render()
    {
        $products = Product::where('status', 'active')->get();
        return view('livewire.shop.all',[
           'products' => $products
        ]);
    }

    public function mount(){
        $this->categories = categories::all();
    }
}
