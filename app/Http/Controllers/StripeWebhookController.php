<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Webhook;
use App\Models\SalesOrder;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;

class StripeWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        $endpoint_secret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\Exception $e) {
            return response('Invalid', 400);
        }

        // Payment Success Event
        if ($event->type === 'checkout.session.completed') {

            $session = $event->data->object;

            $order = SalesOrder::where('stripe_session_id', $session->id)->first();

            if ($order) {
                $order->update([
                    'payment_id' => $session->payment_intent,
                    'stripe_status' => $session->payment_status,
                    'stripe_currency' => $session->currency,
                ]);
                Mail::to($sales_order->email)->send(new OrderConfirmation($sales_order));
            }
        }

        return response('Success', 200);
    }
}