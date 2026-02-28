<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Order') }} - #ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            padding: 40px 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important; */
            font-size: 14px;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border: 1px solid #ddd;
        }

        .invoice-title {
            margin-bottom: 20px;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6 !important;
        }

        .text-muted-small {
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <div class="invoice-box">

        <!-- Company Info -->
        <div class="row invoice-title">
            <div class="col-md-6">
                <div class="d-flex">
                    <img src="{{ asset('media/images/logo.png') }}" alt="Tallow Skincare Logo" width="100">
                </div>
                <h5 class="text-uppercase">Tallow Skincare j.d.o.o</h5>
                <p class=" mb-0">
                    Donja Švarča 79c<br>
                    Karlovac, Karlovačka, 47000<br>
                    Croatia
                </p>
                <p class="">info@tallow-skincare.hr</p>
            </div>

            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <p class="mb-1">
                    <strong>{{ __('Order Number') }}:</strong> #ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}
                </p>
                <p class="mb-1">
                    <strong>{{ __('Date') }}:</strong>
                    {{ $order->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}
                </p>
                <p class="mb-0">
                    <strong>{{ __('Payment Method') }}:</strong> <span
                        class="text-uppercase">{{ $order->payment_method }}</span>
                </p>
                 <div>
            <small> 
                @if ($order->stripe_session_id)
                <div>
                    {{ __('Online Payment') }}: 
                <span class="text-muted-small @if ($order->stripe_status == 'paid') text-success @else text-danger @endif">
                    {{ $order->stripe_status }}

                </span>
                </div>
               
            @endif
        </small>
        </div>


            </div>
        </div>

        <hr>

        <!-- Billing & Shipping -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h6 class=" bg-light p-2">{{ __('Bill To') }}</h6>
                <p class="">
                    {{ $order->first_name }} {{ $order->last_name }}<br>
                    {{ $order->phone_number }}<br>
                    {{ $order->email }}<br>
                    {{ $order->address }}<br>
                    {{ $order->city }} {{ $order->postal_code }}<br>
                    {{ $order->getShippingCountry()?->location }}<br>
                    {{-- {{ $order->country }} --}}
                </p>
            </div>

            <div class="col-md-6">
                @if ($order->delivery_method === 'home_delivery')
                    <h6 class=" bg-light p-2">{{ __('Ship To') }}</h6>
                    @if ($order->shipping_other)
                        <p class="">
                            {{ $order->first_name_other }} {{ $order->last_name_other }}<br>
                            {{ $order->address_other }}<br>
                            {{ $order->city_other }} {{ $order->postal_code_other }}<br>
                            {{ $order->getShippingCountryOther()?->location }}<br>
                            {{ $order->phone_number }}<br>

                        </p>
                    @else
                        <p class="">
                            {{ $order->first_name }} {{ $order->last_name }}<br>
                            {{ $order->address }}<br>
                            {{ $order->city }} {{ $order->postal_code }}<br>
                            {{ $order->getShippingCountry()?->location }}<br>
                            {{ $order->phone_other }}<br>
                        </p>
                    @endif
                @endif
                @if ($order->delivery_method === 'pickup')
                    <h6 class=" bg-light p-2">{{ __('Pickup Location') }}</h6>
                    <p class="text-capitalize">
                        @php
                            $pl = \App\Models\PickupLocation::where('id', $order->pickup_location)->first();
                        @endphp
                        {{ $pl?->pickup_location }}<br>
                        {{-- no need any date format. croatia, they select their local time no need to convert --}}
                        {{ $order?->pickup_date->format('d.m.Y. H:i') }}<br>

                    </p>
                @endif
            </div>
        </div>

        <!-- Invoice Items -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>{{ __('Item') }}</th>
                        <th class="text-end">{{ __('Qty') }}</th>
                        <th class="text-end">{{ __('Price') }}</th>
                        <th class="text-end">{{ __('Total') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->getItems() as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->getProduct()->title }}</td>
                            <td class="text-end">{{ $item->quantity }}</td>
                            <td class="text-end">€ {{ number_format($item->price, 2, ',', '.') }}</td>
                            <td class="text-end">€ {{ number_format($item->price * $item->quantity, 2, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-end"><strong>{{ __('Subtotal') }}</strong></td>
                        <td class="text-end">€{{ number_format($order->total_amount, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end"><strong>{{ __('Discount') }}</strong></td>
                        <td class="text-end">€{{ number_format($order->discount_amount, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end"><strong>{{ __('Shipping') }}</strong></td>
                        <td class="text-end">€{{ number_format($order->shipping_cost, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end"><strong>{{ __('Total') }}</strong></td>
                        @php
                            $finalTotal = $order->total_amount - $order->discount_amount + $order->shipping_cost;
                        @endphp

                        <td class="text-end ">
                            €{{ number_format($finalTotal, 2, ',', '.') }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="mt-3">
            <h6 class="">{{ __('Message:') }}</h6>
            <p>{{ $order->message ?? '' }}</p>
        </div>
        {{-- <hr /> --}}
        <div>
          
        

        </div>
        <div class="mt-5 text-center">
            <span>{{ __('Thank you for your business!') }}</span>
            <p>
                {{ __('If you have any questions, please contact us at') }}
                <a href="mailto:info@tallow-skincare.hr">info@tallow-skincare.hr</a>
            </p>
        </div>

    </div>

</body>

</html>
