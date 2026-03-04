<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\categories;

class All extends Component
{

    public $categories;

    public function render()
    {
        return view('livewire.shop.all');
    }

    public function mount(){
        $this->categories = categories::all();
    }
}
