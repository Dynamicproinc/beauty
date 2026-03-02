@extends('admin.layout')
@section('title', 'Orders')
@section('content')
    <div>

        <div class="table-area">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">{{ __('#') }}</th>
                        <th scope="col">{{ __('Date') }}</th>
                        <th scope="col" class="text-nowrap">{{ __('First Name') }}</th>
                        <th scope="col" class="text-nowrap">{{ __('Last Name') }}</th>
                        <th scope="col">{{ __('Contact') }}</th>
                        <th scope="col">{{ __('Bill to') }}</th>
                        {{-- if pickup in the  --}}
                        <th scope="col">{{ __('Delivery/Pickup') }}</th>
                        <th scope="col">{{ __('Shipping') }}</th>
                        <th scope="col">{{ __('Pickup') }}</th>
                        {{-- Payments  --}}
                        <th scope="col">{{ __('Total') }}</th>
                        <th scope="col">{{ __('Payment Method') }}</th>
                        <th scope="col">{{ __('Status') }}</th>

                    </tr>
                </thead>
                <tbody>
                    @if (count($orders) > 0)
                        @foreach ($orders as $order)
                            <tr>
                                <td scope="row" class="text-nowrap"><a href="{{ route('shop.invoice', $order->slug) }}"
                                        target="_blank"><strong>{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</strong></a>
                                </td>
                                <td class="text-nowrap">
                                    {{ $order->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}</td>
                                <td class="text-capitalize">{{ $order->first_name }}</td>
                                <td class="text-capitalize">{{ $order->last_name }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td class="text-nowrap">
                                    {{ $order->address }}<br>
                                    {{ $order->city }} {{ $order->postal_code }}<br>
                                    {{ $order->getShippingCountry()?->location }}
                                </td>
                                <td class="text-capitalize">{{ str_replace('_', ' ', $order->delivery_method) }}</td>
                                <td class="text-nowrap">
                                    @if ($order->shipping_other)
                                        {{ $order->first_name_other }} {{ $order->last_name_other }}<br>
                                        {{ $order->address_other }}<br>
                                        {{ $order->city_other }} {{ $order->postal_code_other }}<br>
                                        {{ $order->getShippingCountryOther()?->location }}<br>
                                        {{ $order->phone_number }}
                                    @else
                                        {{ $order->first_name }} {{ $order->last_name }}<br>
                                        {{ $order->address }}<br>
                                        {{ $order->city }} {{ $order->postal_code }}<br>
                                        {{ $order->getShippingCountry()?->location }}<br>
                                        {{ $order->phone_other }}
                                    @endif
                                </td>
                                <td class="text-nowrap text-capitalize">
                                    @php
                                        $pl = \App\Models\PickupLocation::where('id', $order->pickup_location)->first();
                                    @endphp
                                    {{ $pl?->pickup_location }}<br>
                                    {{ $order?->pickup_date?->format('d.m.Y. H:i') }}
                                </td>
                                <td class="text-nowrap">{{ $order->total_amount }}</td>
                                <td class="text-uppercase">{{ $order->payment_method }}</td>
                                <td><small class="text-uppercase font-weight-bold text-{{ $order->payment_status === 'success' ? 'success' : 'danger' }}">{{ $order->payment_status }}</small></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="13" class="text-center">{{ __('No orders found.') }}</td>
                        </tr>
                    @endif


                </tbody>
            </table>
            <div class="mt-3">
                {{ $orders->links() }}
            </div>
        </div>
    </div>


@endsection
