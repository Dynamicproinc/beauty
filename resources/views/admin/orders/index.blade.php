@extends('admin.layout')
@section('title', __('Orders'))
@section('content')
    <div>
        {{-- <div>
            {{ number_format($orders->sum('total_amount'), 2, ',', '.') }}
        </div> --}}
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
                        <th scope="col" class="text-right">{{ __('Total') }}</th>
                        <th scope="col" class="text-right">{{ __('Payment Method') }}</th>
                        <th scope="col" class="text-right">{{ __('Payment Status') }}</th>
                        <th scope="col" class="text-right">{{ __('Order Status') }}</th>
                        <th scope="col" class="text-right">{{ __('Actions') }}</th>


                    </tr>
                </thead>
                <tbody>
                    @if (count($orders) > 0)
                        @foreach ($orders as $order)
                            <tr>
                                <td scope="row" class="text-nowrap"><a href="{{ route('shop.invoice', $order->slug) }}"
                                        target="_blank"><strong>{{ $order->order_number }}</strong></a>
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
                                    @if ($order->delivery_method === 'pickup')
                                        @php
                                            $pl = \App\Models\PickupLocation::where(
                                                'id',
                                                $order->pickup_location,
                                            )->first();
                                        @endphp
                                        {{ $pl?->pickup_location }}<br>
                                        {{ $order?->pickup_date?->format('d.m.Y. H:i') }}
                                    @else
                                        n/a
                                    @endif
                                </td>
                                <td class="text-nowrap text-right">{{ $order->final_amount }}</td>
                                <td class="text-uppercase text-right">{{ $order->payment_method }}</td>
                                <td class="text-right "><small
                                        class="text-uppercase font-weight-bold text-{{ $order->payment_status === 'success' ? 'success' : 'danger' }}">{{ $order->payment_status }}</small>
                                </td>
                                <td class="text-uppercase">
                                    @if($order->status === 'pending')
                                        <span class="badge bg-warning text-dark">{{ $order->status }}</span>
                                    @elseif($order->status === 'processing')
                                        <span class="badge bg-info text-dark">{{ $order->status }}</span>
                                    @elseif($order->status === 'completed')
                                        <span class="badge bg-success text-dark">{{ $order->status }}</span>
                                    @elseif($order->status === 'cancelled')
                                        <span class="badge bg-danger text-dark">{{ $order->status }}</span>
                                    @else
                                        <span class="badge bg-secondary text-dark">{{ $order->status }}</span>
                                    @endif 
                                </td>
                                <td>
                                    {{-- bootstrap dropdown --}}
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a class="dropdown-item" href="#">{{ __('View') }}</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">{{ __('Ship Order') }}</a>
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="13" class="text-center">{{ __('No orders found.') }}</td>
                        </tr>
                    @endif


                </tbody>
            </table>

        </div>
        <div class="mt-3">
            {{ $orders->links() }}
        </div>
    </div>


@endsection
