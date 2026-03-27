<?php

namespace App\Livewire\Admin;
use App\Models\PickupLocation;

use Livewire\Component;

class Pickup extends Component
{

public $edit_modal = false;


    public $pickup_location, $description, $cost, $discount, $selected_product, $save_modal = false;



    public function render()
    {
        $locations = PickupLocation::all();
        return view('livewire.admin.pickup',compact('locations'));
    }

   

    public function selectedProduct($id){
     
    $this->edit_modal = true;
        $this->selected_product = PickupLocation::findOrFail($id);
        if($this->selected_product){
            $this->pickup_location = $this->selected_product->pickup_location;
            $this->description = $this->selected_product->description;
            $this->cost  = $this->selected_product->cost;
            $this->discount = $this->selected_product->discount;

        }
    }

    public function closeModal(){
        $this->reset();
    }

    public function delete($id){
        $pl = PickupLocation::findOrFail($id);
        $pl->delete();
    }

    public function update(){

        $this->validate([
            'pickup_location' => 'required',
            'description' => 'required',
            'cost'=> 'required',
            'discount' => 'required'

        ]);

        $this->selected_product->update([
                'pickup_location' => $this->pickup_location,
                'description' => $this->description,
                'cost' => $this->cost,
                'discount' => $this->discount,
        ]);

        
    }

    public function showNew(){
        $this->save_modal = true;
    }

    public function saveNew(){
        
      $this->validate([
    'pickup_location' => 'required|string|max:255',
    'description'     => 'required|string',
    'cost'            => 'required|numeric|min:0',
    'discount'        => 'required|numeric|min:0|max:100',
]);

        $pl = PickupLocation::create([
             'pickup_location' => $this->pickup_location,
                'description' => $this->description,
                'cost' => $this->cost,
                'discount' => $this->discount,
        ]);

        // $this->reset();
    }

}
