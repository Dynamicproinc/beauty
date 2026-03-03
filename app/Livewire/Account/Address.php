<?php

namespace App\Livewire\Account;

use Livewire\Component;
use App\Models\Address as Adr;
use App\Models\ShippingLocation;

class Address extends Component
{
    public $address , $postal_code, $city, $country;
    public $shipping_locations;



    public function render()
    {
        return view('livewire.account.address');
    }

    public function mount(){
        $this->shipping_locations = ShippingLocation::orderBy('location', 'ASC')->get();
       if( $address = Adr::where('user_id', auth()->user()->id)->first()){

           $this->postal_code = $address->postal_code;
           $this->country = $address->country;
           $this->city = $address->city;
           $this->address = $address->address;
       }


    }

    public function saveAddress(){
        $this->validate([
            'country' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'city' => 'required'
        ]);

        $address = Adr::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'country' => $this->country,
                'address' => $this->address,
                'postal_code' => $this->postal_code,
                'city' => $this->city
            ]
        );

        if($address){
            return redirect()->back()->with('message', __('Address updated successfully'));
           
        }else{
            session()->flash('message', __('Failed to update address'));    
        }
    }
    
}
