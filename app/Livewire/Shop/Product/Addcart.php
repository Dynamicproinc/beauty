<?php

namespace App\Livewire\Shop\Product;

use Livewire\Component;
use App\Models\Variant;

class Addcart extends Component
{
    public $product;
    public $selected_option;
    public $selected_variant_data = null;

    public $total_variation_quantity = 0;
    public $quantity = 1;


    public function render()
    {
        return view('livewire.shop.product.addcart');
    }

    public function mount($product)
    {


        $this->product = $product;

        // select the first variant by default if exists
        if ($product->getVariants() && $product->getVariants()->count() > 0) {
            $this->selected_option = $product->getVariants()->first()->id;
            $this->selected_variant_data = Variant::find($this->selected_option);
        }

        // calculate total variation quantity
        $this->total_variation_quantity = $product->getVariants()->sum('quantity');
        // dd($this->total_variation_quantity);
    }

    public function updateVariant($value)
    {
        $this->selected_variant_data = Variant::find($value);
        $this->quantity = 1; // reset quantity to 1 when variant changes


    }





    public function addCart()
    {
        

        //    validate quantity
        if ($this->quantity < 1) {
            $this->quantity = 1;
        }

        // if product has turn on inventory management and it is out of stock, do not allow adding to cart
        if ($this->product->out_of_stock == true) {
            if ($this->selected_variant_data && $this->quantity > $this->selected_variant_data->quantity) {
                $this->quantity = $this->selected_variant_data->quantity;
            }

            // add to cart logic here
            // if product has varient and if same product with same variant already in cart, increase quantity instead of adding new item also not exceed available quantity if product turn on inventory management

            $cart = session('cart', []);
            $found = false;
            foreach ($cart as &$item) {
                //product has varient or not check inventory management

                if ($item['product_id'] == $this->product->id && $item['variant_id'] == ($this->selected_variant_data ? $this->selected_variant_data->id : null)) {
                    // same product and variant found in cart, increase quantity but not exceed available quantity also check product has not varient and apply same logic
                    if (!$this->selected_variant_data) {
                        if ($item['quantity'] + $this->quantity > $this->product->quantity) {
                            $item['quantity'] = $this->product->quantity;
                        } else {
                            $item['quantity'] += $this->quantity;
                            // calcaulate total sum

                        }
                    }
                    if ($this->selected_variant_data) {
                        if ($item['quantity'] + $this->quantity > $this->selected_variant_data->quantity) {
                            $item['quantity'] = $this->selected_variant_data->quantity;
                        } else {
                            $item['quantity'] += $this->quantity;
                            //calculate total sum

                        }
                    }
                    $found = true;
                    break;
                }
            }
            if ($found) {
                session()->put('cart', $cart);
                // $this->dispatch('cartUpdated');
                // $this->dispatch('refreshCartNav');
                // $this->dispatch('open-nav');
                 return redirect()->to(route('shop.cart'));
                return;
            }
            session()->push('cart', [
                'product_id' => $this->product->id,
                'variant_id' => $this->selected_variant_data ? $this->selected_variant_data->id : null,
                'quantity' => $this->quantity,
                'price' => $this->selected_variant_data ? $this->selected_variant_data->additional_price : $this->product->discounted_price,
                'name' => $this->product->title,
            ]);

            // $this->dispatch('cartUpdated');
            // $this->dispatch('refreshCartNav');
            // $this->dispatch('open-nav');
             return redirect()->to(route('shop.cart'));
        } else {
            // product does not have inventory management, just add to cart
            $cart = session('cart', []);
            $found = false;
            foreach ($cart as &$item) {
                if ($item['product_id'] == $this->product->id && $item['variant_id'] == ($this->selected_variant_data ? $this->selected_variant_data->id : null)) {
                    // same product and variant found in cart, increase quantity
                    $item['quantity'] += $this->quantity;
                    $found = true;
                    break;
                }
            }
            if ($found) {
                session()->put('cart', $cart);
                // $this->dispatch('cartUpdated');
                // $this->dispatch('refreshCartNav');
                // $this->dispatch('open-nav');
                 return redirect()->to(route('shop.cart'));
                return;
            }
            session()->push('cart', [
                'product_id' => $this->product->id,
                'variant_id' => $this->selected_variant_data ? $this->selected_variant_data->id : null,
                'quantity' => $this->quantity,
                'price' => $this->selected_variant_data ? $this->selected_variant_data->additional_price : $this->product->discounted_price,
                'name' => $this->product->title,
            ]);
            // calculate totatl sum

            // $this->dispatch('cartUpdated');
            // $this->dispatch('refreshCartNav');

            
            // $this->dispatch('open-nav');
             return redirect()->to(route('shop.cart'));
        }

        
       

    }

    public function incrementQuantity()
    {
        // dd(count($this->product->getVariants()));

        // first need to check weater product variation 
        // has variant and stock controled is on
        // Case 1: Product has variants and stock control is enabled
if (count($this->product->getVariants()) > 0 && $this->product->out_of_stock) {
    if ($this->selected_variant_data) {
        if ($this->quantity < $this->selected_variant_data->quantity) {
            $this->quantity++;
            // dd('case1');
            return;
        } else {
            // Quantity cannot exceed available stock
            $this->quantity = $this->selected_variant_data->quantity;
            //  dd('case1-2');
        }
    }
    return;
}

// Case 2: Product has variants but stock control is disabled
if (count($this->product->getVariants()) > 0 && !$this->product->out_of_control) {
    $this->quantity++;
    //  dd('case2');
    return;
}

// Case 3: Product has no variants and stock control is enabled
if (count($this->product->getVariants()) <= 0 && $this->product->out_of_stock) {
    if ($this->quantity < $this->product->quantity) {
        $this->quantity++;
        //  dd('case3');
        return;
    } else {
        // Quantity cannot exceed available stock
        $this->quantity = $this->product->quantity;
        // dd('case3 -1');
    }
    return;
}

// Case 4: Product has no variants and stock control is disabled
if (count($this->product->getVariants()) <= 0 && !$this->product->out_of_control) {
    $this->quantity++;
    
    
    return;

}






    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }
}
