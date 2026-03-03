@extends('home')
@section('content-account')
    <div>
        <style>
            table{
                font-size: 14px;
                
            }
            td, tr{
                color: #414040 !important;
            }
        </style>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">{{ __('Order') }}</th>
                        <th scope="col">{{ __('Date') }}</th>
                        <th scope="col" class="text-right">{{ __('Total') }}</th>
                        <th scope="col" class="text-right">{{ __('Payment') }}</th>
                        <th scope="col" class="text-right">{{ __('Payment type') }}</th>
                        <th scope="col" class="text-nowrap">{{ __('Delivery') }}</th>
                        {{-- <th scope="col">{{ __('phone') }}</th> --}}
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                   @if (count($orders) > 0)
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->order_number }}</td>
                            <td class="text-right">{{ $order->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}
                            </td>
                            <td class="text-right">€{{ $order->final_amount }}</td>
                            <td class="text-nowrap text-capitalize">
                                {{ str_replace('_', ' ', $order->payment_status) }}
                            </td>
                            <td class="text-nowrap text-uppercase">
                                {{ str_replace('_', ' ', $order->payment_method) }}
                            </td>
                            <td>{{ str_replace('_', ' ', $order->delivery_method) }}</td>
                            {{-- <td>{{ $order->phone_number }}</td> --}}
                            <td><a href="{{ route('shop.invoice', $order->slug) }}" class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                   @else
                        <tr>
                            <td colspan="7" class="text-center">{{ __('No orders found.') }}</td>
                        </tr>
                     @endif




                </tbody>
            </table>
            <div>
                    {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
