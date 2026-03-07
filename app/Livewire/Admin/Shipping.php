<?php

namespace App\Livewire\Admin;

use App\Models\ShippingLocation;
use Livewire\Component;

class Shipping extends Component
{

    public $location_code, $location, $free_shipping = false, $max_amount, $cost;

    public function render()
    {
        $locations = ShippingLocation::orderBy('location_code', 'asc')->paginate(10);
        return view('livewire.admin.shipping', [
            'locations' => $locations,
        ]);
    }



    public function save()
    {

        $this->validate([
            'location_code' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'free_shipping' => 'boolean',
            'max_amount' => 'required_if:free_shipping,1|nullable|numeric|min:0',
            'cost' => 'required|numeric|min:0',
        ]);

        $shipping = ShippingLocation::create([
            'location_code' => $this->location_code,
            'location' => $this->location,
            'free_shipping' => $this->free_shipping,
            'max_value' => $this->max_amount,
            'shipping_cost' => $this->cost
        ]);
    }

    public function updatedFreeShipping($value)
    {
        if (!$value) {
            $this->max_amount = null;
        }
    }
}
