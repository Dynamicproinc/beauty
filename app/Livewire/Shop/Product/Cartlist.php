<?php

namespace App\Livewire\Shop\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variant;


class Cartlist extends Component
{
   public $cart_items = [];
   public $total_sum = 0;
   public $total_quantity = 0;
  public $success_message = '';
   public $error_message = '';
   public $listeners = ['cartUpdated' => 'refreshCart'];


    public function mount()
    {
        $this->cart_items = session('cart', []);
         $this->calculateAllItems();
         $this->calculateTotalSum();
    }

    public function render()
    {
        return view('livewire.shop.product.cartlist', [
            'cart_items' => $this->cart_items
        ]);
    }

    public function refreshCart(){
        $this->cart_items = session('cart', []);
        $this->calculateTotalSum();
        $this->calculateAllItems();
    }

    public function calculateTotalSum(){
        $this->total_sum = 0;
        foreach($this->cart_items as $item){
            $this->total_sum += $item['price'] * $item['quantity'];
        }
        return $this->total_sum;
    }

    public function calculateAllItems(){
        $this->total_quantity = 0;
        foreach($this->cart_items as $item){
            $this->total_quantity += $item['quantity'];
        }
        return $this->total_quantity;
       
    }

    public function removeItem($index){
        $cart = session('cart', []);
        if(isset($cart[$index])){
            unset($cart[$index]);
            session()->put('cart', $cart);
            $this->cart_items = $cart;
            $this->dispatch('cartUpdated');
            $this->dispatch('refreshCartNav');
            $this->success_message = 'Item removed from cart.';
            $this->dispatch('success-message'); 
        }
    }

    public function incrementQuantity($index){
        // if item exists in cart, increment quantity
        $cart = session('cart', []);
        //check product maintain inventory
        $product = Product::find($cart[$index]['product_id']);
        //product max qty
        $max_qty = null;
        if ($product && $product->out_of_stock == true) {
            // if inventory managed take maxmimum stock limit quantity
            // 1. if product have variations get maxium quantity
            $variant = Variant::where('id', $cart[$index]['variant_id'])->first();
            if($variant){
                $max_qty = $variant->quantity;
            }
            // update qty in cart
            if ($max_qty !== null && $cart[$index]['quantity'] < $max_qty){
                $cart[$index]['quantity'] += 1;
                session()->put('cart', $cart);
                $this->cart_items = $cart;
                $this->dispatch('cartUpdated');
                $this->dispatch('refreshCartNav');

            }else{

                 $product_max_qty = $product->quantity;
                if ($product_max_qty !== null && $cart[$index]['quantity'] < $product_max_qty){
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
            if(!$variant){
                // $product_max_qty = $product->quantity;
                // if ($product_max_qty !== null && $cart[$index]['quantity'] < $product_max_qty){
                //     $cart[$index]['quantity'] += 1;
                //     session()->put('cart', $cart);
                //     $this->cart_items = $cart;
                //     $this->dispatch('cartUpdated');
                // }
            }

            
        }else{
            //if product not maintain inventory
            if(isset($cart[$index])){
                $cart[$index]['quantity'] += 1;
            }
            session()->put('cart', $cart);
            $this->cart_items = $cart;
            $this->dispatch('cartUpdated'); 
            $this->dispatch('refreshCartNav'); 
        }
       
    }
    public function decrementQuantity($index){
        $cart = session('cart', []);
        if(isset($cart[$index]) && $cart[$index]['quantity'] > 1){
            $cart[$index]['quantity'] -= 1;

            session()->put('cart', $cart);
            $this->cart_items = $cart;
            $this->dispatch('cartUpdated');
            $this->dispatch('refreshCartNav');
        }
    }
     

    
}
