@extends('admin.layout')
@section('title', 'Orders')
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
                        <th scope="col">{{ __('Email') }}</th>
                        {{-- <th scope="col">{{ __('Country') }}</th> --}}
                        <th scope="col">{{ __('Address') }}</th>
                        {{-- <th scope="col">{{ __('Postal code') }}</th>
                        <th scope="col">{{ __('city') }}</th> --}}
                        {{-- if pickup in the  --}}
                       
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td scope="row" class="text-nowrap">
                                    {{ $user->id}}
                                </td>
                                <td class="text-nowrap">
                                    {{ $user->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}
                                </td>
                                <td class="text-capitalize">{{ $user->name }}</td>
                                <td class="text-capitalize">{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                {{-- <td>{{$user->address->country}}</td> --}}
                                <td class="text-nowrap">
                                    {{ $user->address->address }}<br>
                                    {{ $user->address->city }} {{ $user->address->postal_code }}<br>
                                   
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
            {{ $users->links() }}
        </div>
    </div>


@endsection

