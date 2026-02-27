<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SalesOrder;

class ShopController extends Controller
{
    public function showProduct($slug){
            $product = Product::where('slug',$slug)->where('status', 'active')->where('deleted', 0)->firstOrFail();
        return view('shop.showproduct')->with('product', $product);
    }

    public function checkout(){
       if(session()->has('cart') == false || count(session('cart')) == 0){
            return 'Cart is empty';
       }
       
        return view('shop.checkout');
    }

    public function thankyou($slug){
        
        $order = \App\Models\SalesOrder::where('slug', $slug)->firstOrFail();
        return view('shop.thankyou')->with('order', $order);
    }

    public function cart(){
    //     if(session()->has('cart') == false || count(session('cart')) == 0){
    //         return 'Cart is empty';
    //    }
        return view('shop.cart');
    }

    public function invoice($slug){
        
        $order = SalesOrder::where('slug', $slug)->firstOrFail();
        return view('document.invoice')->with('order', $order);
    }
}
