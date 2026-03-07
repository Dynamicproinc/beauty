<?php

namespace App\Livewire\Admin;

use App\Models\ShippingLocation;
use Livewire\Component;

class Shipping extends Component
{

    public $location_code, $location, $free_shipping = false, $max_amount, $cost;
    public $d_modal = false;
    public $d_modal_edit = false;
    public $selected_location;

    public function render()
    {
        $locations = ShippingLocation::orderBy('location_code', 'asc')->paginate(10);
        return view('livewire.admin.shipping', [
            'locations' => $locations,
        ]);
    }
public function openModal()
{
    $this->d_modal = true;
    $this->location_code = '';
    $this->location = '';
    $this->free_shipping = false;
     $this->max_amount = 0;
      $this->cost = '';
    
    
}

public function openEdit($id){
    $sl = ShippingLocation::findOrFail($id);
    if($sl){
        $this->selected_location = $sl;
     $this->d_modal_edit = true;
    $this->location_code = $sl->location_code;
    $this->location = $sl->location;
    $this->free_shipping = (bool) $sl->free_delivery;
     $this->max_amount = $sl->max_value;
      $this->cost = $sl->shipping_cost;
    }
    
}


public function closeModal()
{
    $this->d_modal = false;
    $this->d_modal_edit = false;
    
}


    public function save()
    {

        $this->validate([
            'location_code' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'free_shipping' => 'boolean',
           
            'cost' => 'required|numeric|min:0',
        ]);

    if($this->free_shipping){
    $this->validate([
         'max_amount' => 'required|nullable|numeric|min:1',
    ]);
    }
        $shipping = ShippingLocation::create([
            'location_code' => $this->location_code,
            'location' => $this->location,
            'free_delivery' => $this->free_shipping,
            'max_value' => $this->max_amount ?? 0,
            'shipping_cost' => $this->cost
        ]);

        $this->reset();
    }
    public function update()
    {

        $this->validate([
            'location_code' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'free_shipping' => 'boolean',
           
            'cost' => 'required|numeric|min:0',
        ]);

    if($this->free_shipping){
    $this->validate([
         'max_amount' => 'required|nullable|numeric|min:1',
    ]);
    }
        
        $this->selected_location->update([
            'location_code' => $this->location_code,
            'location' => $this->location,
            'free_delivery' => $this->free_shipping,
            'max_value' => $this->max_amount ?? 0,
            'shipping_cost' => $this->cost
        ]);

        $this->reset();
    }

    public function updatedFreeShipping($value)
    {
        if (!$value) {
            $this->max_amount = 0;
        }
    }

    public function remove($id)
{
    $s = ShippingLocation::findOrFail($id);
    $s->delete();
}

}
