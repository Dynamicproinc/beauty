@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', 'Your Shopping Cart - ')


@section('content')
    <div>
        <div style="height:150px"></div>
        <div class="container">
            <div class="">
                        <h5>{{ __('Your Cart') }} (4 {{ __('items') }})</h5>
                    </div>
            <div class="row">
                <div class="col-lg-8">
                    
                    <div class="cart-table">
                        <div>
                            <table class="table table-lg">
                                
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex">
                                                <div class="me-2">
                                                    <div class="sm-th-img">
                                                        <img src="https://wholemakerco.com/cdn/shop/products/OrganicFaceTallowWhipSkincare.jpg?v=1668137398"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="mb-2">Tallow Skincare 330g</h6>
                                                        <span class="text-muted">15.75 €</span>
                                                        <div class="counter mt-2">
                                                            <div class="d-flex">
                                                                <button class="c-round">-</button>
                                                                <input type="number" class="c-input" value="1">
                                                                <button class="c-round">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>

                                       
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0 tt-text-xs">15.75 €</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex">
                                                <div class="me-2">
                                                    <div class="sm-th-img">
                                                        <img src="https://wholemakerco.com/cdn/shop/products/OrganicFaceTallowWhipSkincare.jpg?v=1668137398"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="mb-2">Tallow Skincare 330g</h6>
                                                        <span class="text-muted">15.75 €</span>
                                                        <div class="counter mt-2">
                                                            <div class="d-flex">
                                                                <button class="c-round">-</button>
                                                                <input type="number" class="c-input" value="1">
                                                                <button class="c-round">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>

                                       
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0 tt-text-xs">15.75 €</h6>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="payment-summary">
                            <div class="d-flex justify-content-between mb-3">
                                <h6 class="mb-0 tt-text-xs text-uppercase">{{__('subtotal')}}</h6>
                                <span class="mb-0 tt-text-xs text-uppercase">€ 31.50 EUR </span>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <h6 class="mb-0 tt-text-xs text-uppercase">{{__('shipping')}}</h6>
                                <span class="mb-0 tt-text-xs text-uppercase">{{__('Calculated at checkout')}}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 class="mb-0 tt-text-md text-uppercase fw-bolder">{{__('total')}}</h6>
                                <span class="mb-0 tt-text-md text-uppercase fw-bolder">€ 31.50 EUR </span>
                            </div>

                            <div>
                                <p style="color:#000;"><i class="bi bi-truck" style="font-size:14px"></i> {{__('Free shipping on orders over 50 €')}}</p>
                            </div>
                            <div>
                                <a href="{{ route('shop.checkout') }}" class="tt_btn_theme w-100" title="{{__('Buy now tallow skincare product')}}">{{ __('Checkout') }}</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>

    </div>
@endsection
