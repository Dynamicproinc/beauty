@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', 'Your Shopping Cart - ')


@section('content')
    <div>
        <div style="height:100px"></div>
        <div class="container">
            @if (session()->has('cart') == false || count(session('cart')) == 0)
               <div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div> <img src="{{asset('media/svg/cart-empty.svg')}}" alt="Empty cart" class="empty-cart-img"></div>
                        <div class="text-center mt-3">
                            <h5 class="">{{__('Your cart is empty!')}}</h5>
                            <p>{{__('Add some product to get started')}}</p>
                            <a href="{{route('welcome')}}" class="tt_btn_theme">{{__('Shop now')}}</a>
                        </div>
                    </div>
                </div>
               </div>
            @else
            <div>
                <div class="h6 mb-5">
                    <a class="btn btn-default" href="{{ route('welcome') }}">
                        <i class="bi bi-arrow-left"></i> 
                        {{__('Continue Shopping')}}
                    </a>
                </div>
                @livewire('shop.cart')

            </div>
            @endif
        </div>

    </div>
@endsection
