<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SalesOrder;
use App\Models\ReferralLink;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('account.address');
    }

    public function orders(){
        $orders = SalesOrder::where('user_id', Auth::id())->orderBy('created_at', 'desc')->where('payment_status', 'success')->paginate(10);
        return view('account.orders', compact('orders'));
       
    }

    public function referralDashboard(){
        $referral_links = ReferralLink::where('user_id', Auth::id())->first();
        
        return view('account.referral.home', compact('referral_links'));
    }

}
