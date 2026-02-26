<div>
    <div class="">
                        <div class="d-flex justify-content-between">
                            <h5>{{ __('Your Cart') }} @if(count($cart_items)) ({{ count($cart_items) }} {{ count($cart_items) == 1 ? __('item') : __('items') }}) @endif</h5>
                            <button class="btn btn-link text-danger" wire:click="clearCart">{{ __('Clear Cart') }}</button>
                    </div>
            <div class="row">
                <div class="col-lg-8">
                    
                    <div class="cart-table">
                        <div>
                            <table class="table table-lg">
                                
                                <tbody>
                                    @foreach ($cart_items as $index => $item)
                                        
                                    
                                    <tr>
                                        {{-- <th style="width:10px"><button style="widthL:20px" class="btn btn-link text-danger" wire:click="removeItem({{$index}})"><i class="bi bi-trash"></i></button></th> --}}
                                        <th scope="row">
                                            <div class="d-flex">
                                                <div class="me-2">
                                                    <div class="sm-th-img">
                                                        @php
                                                        // get product model for crate slug 
                                                        $product = \App\Models\Product::find($item['product_id']);
                                                        
                                                        @endphp
                                                       <a href="{{ route('shop.product.show', ['id' => $product->slug]) }}">
                                                            <img src="{{ \App\Models\Media::where('product_id', $item['product_id'])->first()?->file_path }}"
                                                            alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="mb-2">{{ $item['name'] }}</h6>
                                                        <span class="text-muted">{{ $item['price'] }} €</span>
                                                        <div class="counter mt-2">
                                                            <div class="d-flex">
                                                                <button class="c-round" wire:click="decrementQuantity({{$index}})">-</button>
                                                                <input type="number" class="c-input" value="{{ $item['quantity'] }}" readonly>
                                                                <button class="c-round" wire:click="addQuantity({{$index}})">+</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </th>

                                       
                                        <td>
                                            <div class="">
                                                <h6 class="mb-0 tt-text-xs mb-3">{{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }} €</h6>
                                                <button class="btn btn-sm btn-link text-danger p-0" wire:click="removeItem({{$index}})">{{__('Remove')}}</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="payment-summary">
                            <div class="sk-pl" wire:loading.flex>
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 class="mb-0 tt-text-xs text-uppercase">{{__('subtotal')}}</h6>
                                
                                <span class="mb-0 tt-text-xs text-uppercase">€ {{ number_format($total, 2, ',', '.'); }} EUR </span>
                                
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <h6 class="mb-0 tt-text-xs text-uppercase">{{__('shipping')}}</h6>
                                <span class="mb-0 tt-text-xs text-uppercase">{{__('Calculated at checkout')}}</span>
                                
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 class="mb-0 tt-text-md text-uppercase fw-bolder">{{__('total')}}</h6>
                                <span class="mb-0 tt-text-md text-uppercase fw-bolder">€ {{number_format($subtotal,2, ',', '.')}} EUR </span>
                            </div>

                            <div>
                                <button class="btn btn-link p-0 mb-5">{{__('Add your coupon')}}</button>
                            </div>
                            <div>
                                <a href="{{ route('shop.checkout') }}" class="tt_btn_theme w-100" title="{{__('Buy now tallow skincare product')}}">{{ __('Checkout') }}</a>
                            </div>
                        </div>

                </div>
            </div>
</div>
