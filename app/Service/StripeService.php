<?php

namespace App\Service;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeService
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function stripeStart($email, $order_id, $amount, $order)
    {
        $session = Session::create([
            'payment_method_types' => ['card'],
            'customer_email' => $email,
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Ukupan iznos za narudžbu br. ' . $order_id,
                    ],
                    // Convert to cents
                    'unit_amount' => (int) round($amount * 100),
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
            'metadata' => [
                'order_id' => $order_id,
            ],
        ]);

        $order->update([
            'stripe_session_id' => $session->id,
        ]);

        return redirect($session->url);
    }
}