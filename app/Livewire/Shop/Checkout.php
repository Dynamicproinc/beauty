<?php

namespace App\Livewire\Shop;

use App\Models\PickupLocation;
use Livewire\Component;
use App\Models\ShippingLocation;
use App\Models\SalesOrder;
use App\Models\SalesOrderItem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Order;

class Checkout extends Component
{
    public $total = 0;
    public $final_total = 0;
    public $ship = 20;
    public $disc = 0;
    public $freeshipping = false;
    public $email;
    public $shipping_location, $shipping_locations, $shipping_cost, $shipping_location_other;
    public $delivery_method = 'home_delivery';
    public $pickup_locations, $pickup_location;
    public $dis_presentage = 0;
    public $dis_amount =  0;
    public $billing = 'default';
    public $payment_method = "card";
    public $phone_number, $first_name, $last_name, $address, $city, $postal_code, $first_name_other, $last_name_other, $address_other, $postal_code_other, $city_other, $phone_other, $phone_number_other, $pickup_datetime, $message;




    public function render()
    {
        return view('livewire.shop.checkout');
    }

    public function mount()
    {
        //    dd($this->getCartValue());
        //    get Shiping Loations
        $this->shipping_locations = ShippingLocation::orderBy('location', 'ASC')->get();
        $this->pickup_locations = PickupLocation::orderBy('pickup_location', 'ASC')->get();
        $this->email = auth()->user() ? auth()->user()->email : '';
        $this->getFinalValue();
    }

    function refreshDeliveryMethod()
    {
        if ($this->delivery_method == 'pickup') {
            $this->shipping_cost = 0;
            $this->shipping_location = '';
        }
        if ($this->delivery_method == 'home_delivery') {
            $this->dis_amount = 0;
            $this->dis_presentage = 0;
            $this->pickup_location = '';
        }
        $this->getFinalValue();
    }

    function refreshBilling()
    {
        if ($this->billing == 'default') {
            $this->shipping_location_other == "";
        }
    }

    function getCartValue()
    {
        $coupone_discount = 0;
        $cart = session('cart', []);

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // deduct coupone discount if applied 
        $total = $total - $coupone_discount;
        return $total;
    }


    function getFinalValue()
    {
        $this->final_total = $this->getCartValue() - $this->dis_amount + $this->shipping_cost;
    }

    public function pickupLocationDiscount()
    {
        // make shipping free



        $pl = PickupLocation::where('id', $this->pickup_location)->first();
        if(!$pl){
           $this->dis_presentage = 0;
           $this->dis_amount = 0;
        }else{
            $this->dis_presentage = $pl->discount;
            $this->dis_amount = $this->getCartValue() * $this->dis_presentage / 100;
        }

        
        $this->getFinalValue();
    }


    public function setDiscount($value)
    {
        return $value;
    }



    public function getShippingCost()
    {

    
        // location table like this if location dont have any free delovey just keep like false 
        //location table id | location_code | Free_delivery (boolean) | free_delivery_line | cost
        if ($this->billing == 'other') {
            $location = ShippingLocation::where('id', $this->shipping_location_other)->first();
        } else {
            $location = ShippingLocation::where('id', $this->shipping_location)->first();
        }


        // check location has freeshiping
        if ($location) {

            // calculation shipping costs if free shiing
            if ($location->free_delivery) {
                if ($this->getCartValue() >= $location->max_value) {
                    $this->shipping_cost = 0;
                } else {
                    $this->shipping_cost = $location->shipping_cost;
                }
            } else {
                $this->shipping_cost = $location->shipping_cost;
            }
        } else {
            $this->shipping_cost = 0;
        }

        $this->getFinalValue();
    }


    public function saveOrder()
    {
        // dd($this->delivery_method);
        // check cart has items
        if (!$cart = session('cart', [])) {
            return null;
        }
        // condtional validation feilds

        //if user select the home dellivery option
        //contact details validatrion
    

  $this->validate([
    'email' => 'required|email|max:100',
    'phone_number' => 'required|string|min:2|max:50',
    'first_name' => 'required|string|min:2|max:50',
    'last_name' => 'required|string|min:2|max:50',
]);

if ($this->delivery_method === 'home_delivery') {

    $this->validate([
        'address' => 'required|string|min:2|max:255',
        'city' => 'required|string',
        'postal_code' => 'required|string',
        'shipping_location' => 'required|exists:shipping_locations,id',
    ]);

    if ($this->billing === 'other') {
        $this->validate([
            'first_name_other' => 'required|string|min:2|max:50',
            'last_name_other' => 'required|string|min:2|max:50',
            'address_other' => 'required|string|min:2|max:255',
            'city_other' => 'required|string',
            'postal_code_other' => 'required|string|min:2|max:50',
            'phone_number_other' => 'required|string|min:2|max:50',
            'shipping_location_other' => 'required|exists:shipping_locations,id',
        ]);
    }
}

if ($this->delivery_method === 'pickup') {
    $this->validate([
        'pickup_location' => 'required|exists:pickup_locations,id',
        'pickup_datetime' => 'required|date|after:now',
        'message' => 'nullable|string|max:500',
        'phone_number_other' => 'nullable|string|min:2|max:50',
    ]);
}
// create a unique slug for the order
$slug = Str::random(25);

//creating the sales order
    $sales_order = SalesOrder::create([
    'user_id' => auth()?->id() ?? 0,
    'slug' => $slug,
    'email' => $this->email,
    'phone_number' => $this->phone_number,
    'first_name' => $this->first_name,
    'last_name' => $this->last_name,
    'status' => 'pending',
    'total_amount' => $this->getCartValue(),
    'shipping_cost' => $this->shipping_cost,
    'discount_amount' => $this->dis_amount,
    'delivery_method' => $this->delivery_method,
    'payment_method' => $this->payment_method,
    'payment_status' => 'pending',
    'pickup_location' => $this->pickup_location,
    'pickup_date' => $this->pickup_datetime,
    'country' => $this->shipping_location,
    'address' => $this->address,
    'postal_code' => $this->postal_code,
    'city' => $this->city,
    'shipping_other' => $this->billing === 'other' ? 1 : 0,
    'first_name_other' => $this->first_name_other ? $this->first_name_other : null,
    'last_name_other' => $this->last_name_other ? $this->last_name_other : null,
    'country_other' => $this->shipping_location_other ? $this->shipping_location_other : null,
    'address_other' => $this->address_other ? $this->address_other : null,
    'postal_code_other' => $this->postal_code_other ? $this->postal_code_other : null,
    'city_other' => $this->city_other ? $this->city_other : null,
    'message' => $this->message ? $this->message : null,
    'phone_other' => $this->phone_number_other ? $this->phone_number_other : null,
    'stripe_status'=> 'pending',
    ]);



    // save order items
    foreach ($cart as $item) {
       SalesOrderItem::create([
            'sales_order_id' => $sales_order->id,
            'product_id' => $item['product_id'],
            'quantity' => $item['quantity'],
            'price' => $item['price'],
        ]);


    }

    if($this->payment_method == 'card'){
        //stripe 
        Stripe::setApiKey(config('services.stripe.secret'));

        
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Tallow Skincare',
                    ],
                    'unit_amount' => 1000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
            'metadata' => [
                'order_id' => $sales_order->id,
            ],
        ]);

        // Save session ID
        $sales_order->update([
            'stripe_session_id' => $session->id,
        ]);

        return redirect($session->url);
        // end stripe 
    }


    //clear the cart
    session()->forget('cart');
    
    return redirect()->to(route('shop.invoice', ['slug' => $sales_order->slug]));

}
}
