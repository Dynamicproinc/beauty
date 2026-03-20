<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Webhook;
use App\Models\SalesOrder;
use App\Mail\OrderConfirmation;
use App\Models\DigitalGiftCard;
use App\Mail\GiftCard;
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
            $digital_gift = DigitalGiftCard::where('stripe_session_id', $session->id)->first();

            if ($order) {
                $order->update([
                    'payment_id' => $session->payment_intent,
                    'stripe_status' => $session->payment_status,
                    'stripe_currency' => $session->currency,
                    'payment_status' => 'success',
                ]);
                Mail::to($order->email)
                    ->bcc('info@tallow-skincare.hr')
                    ->send(new OrderConfirmation($order));
            }

            if($digital_gift){
                $digital_gift->update([
                    'payment_status'=> 'paid',
                    'status' => 'active'
                ]);
                // need to send the email the card
                 Mail::to($digital_gift->email)
                    ->bcc('info@tallow-skincare.hr')
                    ->send(new GiftCard($digital_gift));

            }


        }

        return response('Success', 200);
    }
}
