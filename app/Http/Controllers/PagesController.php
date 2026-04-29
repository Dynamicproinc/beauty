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
        if (!session()->has('locale')) {
            session()->put('locale', 'hr'); // or 'en' depending on your default
        }

        if (session('locale') === 'hr') {
            return view('pages.privacy-hr');
        }

        return view('pages.privacy');
    }
    public function terms()
    {
        if (!session()->has('locale')) {
            session()->put('locale', 'hr'); // or 'en' depending on your default
        }

        if (session('locale') === 'hr') {
            return view('pages.terms-hr');
        }

        return view('pages.terms');
    }

    public function emailSubscription()
    {
        return view('pages.subscribe');
    }

    public function ourStory()
    {


        return view('pages.our-story');
    }

    public function deliveryTerms()
    {
        if (!session()->has('locale')) {
            session()->put('locale', 'hr'); // or 'en' depending on your default
        }

        if (session('locale') === 'hr') {
            return view('pages.delivery-hr');
        }

        return view('pages.delivery');
    }
}
