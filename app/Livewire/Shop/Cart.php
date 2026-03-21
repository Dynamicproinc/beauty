<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variant;
use App\Models\DigitalGiftCard;

class Cart extends Component
{

    public $cart_items = [];

    public $subtotal, $total, $discount = 0;
    public $gift_code, $gift_card;

    public function render()
    {
        return view('livewire.shop.cart', [
            'cart_items' => $this->cart_items
        ]);
    }

    public function mount()
    {
        // dd(session()->all());
       
        $this->cart_items = session('cart', []);
        $this->refreshCart();
    }

    public function addQuantity($index)
    {
        // if item exists in cart, increment quantity
        $cart = session('cart', []);
        if (!$cart || count($cart) < 0) {
            return null;
        }
        //check product maintain inventory
        $product = Product::find($cart[$index]['product_id']);
        //product max qty
        $max_qty = null;
        if ($product && $product->out_of_stock == true) {
            // if inventory managed take maxmimum stock limit quantity
            // 1. if product have variations get maxium quantity
            $variant = Variant::where('id', $cart[$index]['variant_id'])->first();
            if ($variant) {
                $max_qty = $variant->quantity;
            }
            // update qty in cart
            if ($max_qty !== null && $cart[$index]['quantity'] < $max_qty) {
                $cart[$index]['quantity'] += 1;
                session()->put('cart', $cart);
                $this->cart_items = $cart;
                $this->dispatch('cartUpdated');
                $this->dispatch('refreshCartNav');
            } else {

                $product_max_qty = $product->quantity;
                if ($product_max_qty !== null && $cart[$index]['quantity'] < $product_max_qty) {
                    $cart[$index]['quantity'] += 1;
                    session()->put('cart', $cart);
                    $this->cart_items = $cart;
                    $this->dispatch('cartUpdated');
                    $this->dispatch('refreshCartNav');
                }


                //    dd($max_qty);
                $this->error_message = 'Cannot add more items. Stock limit reached.';
                $this->dispatch('error-message');
                //     return null;
            }

            //if dont have variation
            if (!$variant) {
                // $product_max_qty = $product->quantity;
                // if ($product_max_qty !== null && $cart[$index]['quantity'] < $product_max_qty){
                //     $cart[$index]['quantity'] += 1;
                //     session()->put('cart', $cart);
                //     $this->cart_items = $cart;
                //     $this->dispatch('cartUpdated');
                // }
            }
        } else {
            //if product not maintain inventory
            if (isset($cart[$index])) {
                $cart[$index]['quantity'] += 1;
            }
            session()->put('cart', $cart);
            $this->cart_items = $cart;
            $this->dispatch('cartUpdated');
            $this->dispatch('refreshCartNav');
        }
        $this->refreshCart();
    }

    public function decrementQuantity($index)
    {
        $cart = session('cart', []);
        if (isset($cart[$index]) && $cart[$index]['quantity'] > 1) {
            $cart[$index]['quantity'] -= 1;
            session()->put('cart', $cart);
            $this->cart_items = $cart;
            $this->dispatch('cartUpdated');
            $this->dispatch('refreshCartNav');
        }
        $this->refreshCart();
    }

    public function removeItem($index)
    {
        $cart = session('cart', []);
        if (isset($cart[$index])) {
            unset($cart[$index]);
            session()->put('cart', $cart);
            $this->cart_items = $cart;
            $this->dispatch('cartUpdated');
            $this->dispatch('refreshCartNav');
        }
        if (count($cart) == 0) {
            $this->total = 0;
            $this->subtotal = 0;
        }
        // dd(count($cart));
        $this->refreshCart();
    }

    public function clearCart()
    {
        session()->forget('cart');
        $this->cart_items = [];

        $this->total = 0;
        $this->subtotal = 0;
    }

    public function refreshCart()
    {
        // find amount of gift code
        if(session()->has('gift_card_model')){

            $gc = DigitalGiftCard::where('gift_code', session()->get('gift_card_model'))->where('status', 'active')->first();
            if($gc)
                {
                 $this->discount = $gc->amount;
                }
        }
        
        // calcaulte total
        if ($cart = session('cart', [])) {
            $total = 0;
            foreach ($cart as $item) {
                $total = $total + $item['price'] * $item['quantity'];
            }

            $this->total = $total;
            if($this->discount > $this->total){
                $this->total = 0;
                $this->subtotal = 0;
            }else{

                $this->subtotal = $total - $this->discount;
            }

            $this->dispatch('refresh_navbar');
        }
    }

    public function applyGiftCard()
{
    $this->validate([
        'gift_code' => 'required'
    ]);

    $gift_card = DigitalGiftCard::where([
        'gift_code' => $this->gift_code,
        'payment_status' => 'paid',
        'status' => 'active'
    ])->first();

    if (!$gift_card) {
        session()->flash('error', __('Invalid gift card'));
        return;
    }

    // Store only necessary data in session
    $this->discount = $gift_card->amount;
    // if($gc_success){
        // }
        // $gc_success =  session()->put('gift_card', [
        //     'id' => $gift_card->id,
        //     'amount' => $gift_card->amount,
        //     ]);
        session()->put('gift_card_model', $gift_card->gift_code);
            $this->refreshCart();
    

}

public function removeGiftCardSession()
{
   if(session()->has('gift_card_model')){
        session()->forget('gift_card_model');
       $this->discount = 0;
      

    $this->refreshCart();

    $this->dispatch('$refresh');

   }else{
    dd('wrong');
   }
}
}
