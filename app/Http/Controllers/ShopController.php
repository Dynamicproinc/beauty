<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function showProduct($slug){
            $product = Product::where('slug',$slug)->where('status', 'active')->where('deleted', 0)->firstOrFail();
        return view('shop.showproduct')->with('product', $product);
    }

    public function checkout(){
       
        return view('shop.checkout');
    }
}
