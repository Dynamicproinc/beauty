<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class GlsService
{
    public function createShipment(Order $order): array
    {
        if (!$order->gls_location_id) {
            throw new RuntimeException(
                'GLS location ID is missing.'
            );
        }

        // $payload = [
        //     // We will put the exact GLS API fields here.
        //     //
        //     // Example structure only:
        //     //
        //     // 'recipient' => [
        //     //     'name' => $order->customer_name,
        //     //     'phone' => $order->customer_phone,
        //     // ],
        //     //
        //     // 'parcelShop' => $order->gls_location_id,
        //     //
        //     // 'reference' => $order->id,
        // ];

        $payload = [
            'Username' => config('services.gls.username'),
            'Password' => config('services.gls.password'),
            'ClientNumber' => config('services.gls.client_number'),

            'ParcelList' => [
                [
                    'Weight' => 1.8,
                ],
            ],

            'DeliveryAddress' => [
                'Name' => $order->customer_name,
                'Street' => $order->gls_paketomat_address,
                'HouseNumber' => '',
                'ZipCode' => $order->gls_paketomat_postal_code,
                'City' => $order->gls_paketomat_city,
                'CountryIsoCode' => 'HR',
                'ContactName' => $order->customer_name,
                'ContactPhone' => $order->customer_phone,
                'ContactEmail' => $order->customer_email,
            ],

            'ClientReference' => 'ORDER-' . $order->id,

            'ServiceList' => [
                [
                    'Code' => 'PSD',
                    'PSDParameter' => $order->gls_location_id,
                ],
                [
                    'Code' => 'FDS',
                    'Parameter' => $order->customer_email,
                ],
            ],
        ];

        // $response = Http::withToken(
        //     config('services.gls.token')
        // )->post(
        //     config('services.gls.url'),
        //     $payload
        // );
        $response = Http::post(
            config('services.gls.url'),
            $payload
        );

        if ($response->failed()) {
            throw new RuntimeException(
                'GLS API error: ' . $response->body()
            );
        }

        return $response->json();
    }
}
