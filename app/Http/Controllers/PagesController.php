<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{

    public function welcome()
    {
        $selection = 1;
        $selected_product = Product::first();

        return view('tallow_theme', compact('selected_product'));
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
    public function terms()
    {
        return view('pages.terms');
    }

    public function emailSubscription()
    {
        return view('pages.subscribe');
    }
}
