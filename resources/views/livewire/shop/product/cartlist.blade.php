<div>
    <div class="sidenav-cont" id="navcont" wire:ignore.self>
        <div class="sidenav-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0 p-0  font-weight-light">{{ __('My Shopping Bag') }} (<span
                        class="cart-count">{{ $total_quantity }}</span>)</h5>
                <button class="btn-close" onclick="closeNav()"></button>

            </div>

        </div>

        <div>


            <div class="cart-items container p-4">

                <div>
                    @if ($cart_items && count($cart_items) > 0)
                        {{-- Loop through cart items --}}
                        @foreach ($cart_items as $index => $item)
                            <div class="row mb-3">
                                <div class="col-4">
                                    <img src="{{ \App\Models\Media::where('product_id', $item['product_id'])->first()?->file_path }}"
                                        class="cart-image rounded" alt="{{ $item['name'] }}">
                                </div>
                                <div class="col-8">
                                    <h6 class="m-0 p-0 fw-bold mb-1">
                                        {{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }} €</h6>
                                    <h6 class="m-0 p-0 fw-normal">{{ $item['name'] }}</h6>
                                    <p class="m-0 p-0 text-muted">
                                        {{ \App\Models\Variant::find($item['variant_id'])?->value }}</p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center mt-2">
                                            <button class="btn rounded-button"
                                                wire:click="decrementQuantity({{ $index }})">-</button>
                                            <input type="number" class="form-control text-center mx-2"
                                                style="width: 60px;" value="{{ $item['quantity'] }}" readonly>
                                            <button class="btn rounded-button"
                                                wire:click="incrementQuantity({{ $index }})">+</button>
                                        </div>
                                        <div class="p-3">
                                            <small class="text-muted clickable"
                                                wire:click="removeItem({{ $index }})">Remove</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <hr />
                    @else
                        <div class="empty-cart-list">
                            <div>
                                <h3 class="text-muted">{{ __('Your cart is empty') }}</h3>
                                <div class="d-flex justify-content-center">
                                    <button class="btn black-square-button mt-3">{{ __('SHOP NOW') }}</button>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- <div class="row mb-3">
                            <div class="col-4">
                                <img src="https://swedishwild.com/cdn/shop/products/Algryggbiffytterfile.jpg?v=1685966812&width=840" class="cart-image rounded" alt="">
                            </div>
                            <div class="col-8">
                                
                                <h6 class="m-0 p-0 font-weight-normal mb-1">12,50 €</h6>
                                <h6 class="m-0 p-0">Scotch Beef Sirloin Steak Special Trim Twin Pack</h6>
                                <p class="m-0 p-0 text-muted">400g</p>
                               <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center mt-2">
                                    <button class="btn rounded-button">-</button>
                                    <input type="number" class="form-control text-center mx-2" style="width: 60px;" value="1" readonly>
                                    <button class="btn rounded-button">+</button>
                                </div>
                                <div class="p-3">
                                    <small class="text-muted">Remove</small>
                                </div>
                               </div>
                                
                            </div>
                        </div> --}}










                </div>

                <div class="mt-3">
                    <h6 class="mb-3">{{ __('Often bought together') }}</h6>
                    <div class="thumb-area" wire:ignore>
                        <div class="main-carousel-3">
                            <div class="carousel-cell px-2">
                                <div class="thumb-prevs mb-3">
                                    <img src="https://the-m-brothers.com/wp-content/uploads/2022/08/t-bone.jpg">
                                    <h5 class="mb-0">€ 6,0</h5>
                                    <h6 class="sm-card-text">

                                        Virginia Cure Streaky Bacon Sliced
                                    </h6>
                                </div>
                            </div>
                            <div class="carousel-cell px-2">
                                <div class="thumb-prevs mb-3">
                                    <img src="https://the-m-brothers.com/wp-content/uploads/2022/08/t-bone.jpg">
                                    <h5 class="mb-0">€ 6,0</h5>
                                    <h6 class="sm-card-text">

                                        Virginia Cure Streaky Bacon Sliced
                                    </h6>
                                </div>
                            </div>
                            <div class="carousel-cell px-2">
                                <div class="thumb-prevs mb-3">
                                    <img src="https://the-m-brothers.com/wp-content/uploads/2022/08/t-bone.jpg">
                                    <h5 class="mb-0">€ 6,0</h5>
                                    <h6 class="sm-card-text">

                                        Virginia Cure Streaky Bacon Sliced
                                    </h6>
                                </div>
                            </div>
                            <div class="carousel-cell px-2">
                                <div class="thumb-prevs mb-3">
                                    <img src="https://the-m-brothers.com/wp-content/uploads/2022/08/t-bone.jpg">
                                    <h5 class="mb-0">€ 6,0</h5>
                                    <h6 class="sm-card-text">

                                        Virginia Cure Streaky Bacon Sliced
                                    </h6>
                                </div>
                            </div>
                            <div class="carousel-cell px-2">
                                <div class="thumb-prevs mb-3">
                                    <img src="https://the-m-brothers.com/wp-content/uploads/2022/08/t-bone.jpg">
                                    <h5 class="mb-0">€ 6,0</h5>
                                    <h6 class="sm-card-text">

                                        Virginia Cure Streaky Bacon Sliced
                                    </h6>
                                </div>
                            </div>
                            <div class="carousel-cell px-2">
                                <div class="thumb-prevs mb-3">
                                    <img src="https://the-m-brothers.com/wp-content/uploads/2022/08/t-bone.jpg">
                                    <h5 class="mb-0">€ 6,0</h5>
                                    <h6 class="sm-card-text">

                                        Virginia Cure Streaky Bacon Sliced
                                    </h6>
                                </div>
                            </div>
                            <div class="carousel-cell px-2">
                                <div class="thumb-prevs mb-3">
                                    <img src="https://the-m-brothers.com/wp-content/uploads/2022/08/t-bone.jpg">
                                    <h5 class="mb-0">€ 6,0</h5>
                                    <h6 class="sm-card-text">

                                        Virginia Cure Streaky Bacon Sliced
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sidenav-footer">
                <div class="p-4">
                    <div>



                        <span class="fw-light">Total</span>
                        <h3 class="font-weight-bolder">{{ number_format($total_sum, 2, ',', ' ') }} €</h3>
                        <p class="lh-1"><small class="text-muted">The final delivery charge will be calculated at the
                                checkout.</small></p>
                    </div>
                    <div class="">
                        @if ($cart_items && count($cart_items) > 0)
                            <a href="{{route('shop.checkout')}}" class="btn-1-lg">{{ __('CHECKOUT') }}</a>
                        @else
                            <button class="btn-1-lg" disabled>{{ __('CHECKOUT') }}</button>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- model for fixed notification bar --}}
    @if ($success_message || $error_message)
        <div class="fixed-message-bar">
            <div>
                @if ($success_message)
                    <small x-data x-init="setTimeout(() => $wire.set('success_message', ''), 3000)" class="text-success font-weight-bold d-block mt-2">
                        <i class="bi bi-check-circle-fill" style="font-size:14px"></i> {{ $success_message }}
                    </small>
                @endif
                @if ($error_message)
                    <small x-data x-init="setTimeout(() => $wire.set('error_message', ''), 3000)" class="text-danger font-weight-bold d-block mt-2">
                        <i class="bi bi-x-circle-fill" style="font-size:14px"></i> {{ $error_message }}
                    </small>
                @endif
            </div>
        </div>
    @endif

    {{--  --}}
</div>
