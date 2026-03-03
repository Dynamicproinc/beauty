@extends('home')
@section('content-account')
    <div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">{{ __('Order') }}</th>
                        <th scope="col">{{ __('Date') }}</th>
                        <th scope="col" class="text-nowrap">{{ __('Customer') }}</th>
                        <th scope="col">{{ __('phone') }}</th>
                        <th scope="col" class="text-right">{{ __('Total') }}</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->order_number }}</td>
                            <td class="text-right">{{ $order->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}
                            </td>
                            <td class="text-nowrap text-capitalize">
                                {{ $order->first_name }} {{ $order->last_name }}
                                <small class="d-block text-muted">
                                    {{ $order->delivery_method === 'pickup' ? __('Pickup') : __('Delivery') }}
                                </small>
                            </td>
                            <td>{{ $order->phone_number }}</td>
                            <td class="text-right">€{{ $order->final_amount }}</td>
                            <td><a href="{{ route('shop.invoice', $order->slug) }}" class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
@endsection
