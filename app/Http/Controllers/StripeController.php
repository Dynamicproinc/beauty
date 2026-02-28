<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\SalesOrder;

class StripeController extends Controller
{
    public function checkout()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Test Product',
                        ],
                        'unit_amount' => 1000, // $10.00 (in cents)
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
        ]);

        return redirect($session->url);
    }

    public function success(Request $request)
    {
        // $sessionId = $request->get('session_id');

        // $order = SalesOrder::where('stripe_session_id', $sessionId)->first();

        // if (!$order) {
        //     return "Order not found.";
        // }

        // if ($order->stripe_status === 'paid') {
        //     return view('stripe.payment-success');
        // }

        // return view('stripe.payment-processing');
        $sessionId = $request->get('session_id');

        return view('payment-waiting', [
            'sessionId' => $sessionId
        ]);
    }

    public function cancel()
    {
        return "Payment Cancelled!";
    }
}
