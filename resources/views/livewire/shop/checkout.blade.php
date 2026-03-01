<div>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                     
                    <div class="container" style="margin-top: 80px;">
                        @guest
                            
                        
                        <div class="py-3 mb-3">
                           
                            <p>{{ __('If you have an account, please login in to continue') }}</p>
                            <a href="{{ route('login') }}" class="btn btn-dark">{{ __('Login') }}</a>
                            {{-- <button class="gsi-material-button">
                                <div class="gsi-material-button-state"></div>
                                <div class="gsi-material-button-content-wrapper">
                                    <div class="gsi-material-button-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                                            <path fill="#EA4335"
                                                d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                            </path>
                                            <path fill="#4285F4"
                                                d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                            </path>
                                            <path fill="#FBBC05"
                                                d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                            </path>
                                            <path fill="#34A853"
                                                d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                            </path>
                                            <path fill="none" d="M0 0h48v48H0z"></path>
                                        </svg>
                                    </div>
                                    <span class="gsi-material-button-contents">{{ __('Continue with Google') }}</span>
                                    <span style="display: none;">{{__('Continue with Google')}}</span>
                                </div>
                            </button> --}}
                        </div>
                        @else
                            <div class="py-3 mb-3">
                                <p class="mb-0">{{ __('You are currently signed in as') }} {{ auth()->user()->name }}</p>
                                <span class="text-muted">{{ auth()->user()->email }}</span>
                            </div>
                        @endguest
                        
                        <form wire:submit="saveOrder">
                            
                            <div>
                                <div class="d-flex mb-3">
                                    <div class="w-100">
                                        <input type="radio" id="hd" value="home_delivery" class="d-type-radio"
                                            wire:model.live="delivery_method" wire:click = "refreshDeliveryMethod">
                                        <label for="hd" class="btn-radio">
                                            <i class="bi bi-truck mx-2"></i> {{ __(' Home Delivery') }}
                                        </label>
                                    </div>
                                    <div class="mx-2 w-100">
                                        <input type="radio" id="pick" value="pickup" class="d-type-radio"
                                            wire:model.live="delivery_method" wire:click = "refreshDeliveryMethod">
                                        <label for="pick" class="btn-radio">
                                            <i class="bi bi-box-seam mx-2"></i> {{ __(' Personal Pickup') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mb-2">{{ __('Contact') }}</h6>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            id="firstname" placeholder="{{ __('First Name') }}" wire:model="first_name">
                                        <label for="firstname">{{ __('First Name') }} <small
                                                class="text-danger">*</small></label>
                                        <small class="text-danger">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text"
                                            class="form-control @error('last_name') is-invalid @enderror" id="lastname"
                                            placeholder="{{ __('Last Name') }}" wire:model="last_name">
                                        <label for="lastname">{{ __('Last Name') }}<small
                                                class="text-danger">*</small></label>
                                        <small class="text-danger">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email"
                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                    id="contact_email" placeholder="Email" wire:model="email">
                                <label for="contact_email">{{ __('Email') }}<small
                                        class="text-danger">*</small></label>
                                <small class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="phone" placeholder="{{ __('Phone') }}" wire:model="phone_number">
                                <label for="phone">{{ __('Phone') }}<small class="text-danger">*</small></label>
                                <small class="text-danger">
                                    @error('phone_number')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            {{-- <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="checkChecked"
                                        checked>
                                    <label class="form-check-label" for="checkChecked">
                                        {{ __('Email me with news and offers') }}
                                    </label>
                                </div> --}}
                            {{-- start billing --}}

                            @if ($delivery_method == 'home_delivery')
                                <div>


                                    <h6>{{ __('Billing Information') }}</h6>
                                    <div class="form-floating mb-3">
                                        <select class="form-select @error('shipping_location') is-invalid @enderror"
                                            id="floatingSelect" aria-label="fl-select-country"
                                            wire:model="shipping_location" wire:change="getShippingCost">
                                            <option>{{ __('Select') }}</option>
                                            @foreach ($shipping_locations as $item)
                                                <option value="{{ $item->id }}">{{ $item->location }}</option>
                                            @endforeach

                                            {{-- <option value="3">Three</option> --}}
                                        </select>
                                        <label for="floatingSelect">{{ __('Country/Region') }}<small
                                                class="text-danger">*</small></label>
                                        <small class="text-danger">
                                            @error('shipping_location')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="firstname"
                                                    placeholder="{{ __('First Name') }}"  wire:model="first_name">
                                                <label for="firstname">{{ __('First Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="{{ __('Last Name') }}" wire:model="last_name">
                                                <label for="lastname">{{ __('Last Name') }}</label>
                                            </div>
                                        </div>
                                    </div> --}}



                                    <div class="form-floating mb-3">
                                        <input type="text"
                                            class="form-control @error('address') is-invalid @enderror" id="Address"
                                            placeholder="{{ __('Address') }}" wire:model="address">
                                        <label for="Address">{{ __('Address') }}<small
                                                class="text-danger">*</small></label>
                                        <small class="text-danger">
                                            @error('address')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    {{-- <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="Address2"
                                            placeholder="{{ __('Address2') }}">
                                        <label for="Address2">{{ __('Appartment, Suite, etc. (Optional)') }}</label>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <div class="form-floating mb-3">
                                                <input type="text"
                                                    class="form-control @error('postal_code') is-invalid @enderror"
                                                    id="postal_code" placeholder="{{ __('Postal Code') }}"
                                                    wire:model="postal_code">
                                                <label for="postal_code">{{ __('Postal Code') }}<small
                                                        class="text-danger">*</small></label>
                                                <small class="text-danger">
                                                    @error('postal_code')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <div class="form-floating mb-3">
                                                <input type="text"
                                                    class="form-control @error('city') is-invalid @enderror"
                                                    id="city" placeholder="{{ __('City') }}"
                                                    wire:model="city">
                                                <label for="city">{{ __('City') }}<small
                                                        class="text-danger">*</small></label>
                                                <small class="text-danger">
                                                    @error('city')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="sinfo" checked wire:model="save_address_data">
                                        <label class="form-check-label" for="sinfo">
                                            {{ __('Save this information for next time') }}
                                        </label>
                                    </div>

                                </div>

                            @endif
                            {{-- end delivery --}}

                            {{--  --}}
                            @if ($delivery_method == 'pickup')

                                <div class="mb-3">
                                    <h6>{{ __('Personal pickup') }}</h6>
                                    <div class="form-floating mb-3">
                                        <select
                                            class="form-select text-capitalize @error('pickup_location') is-invalid @enderror"
                                            id="floatingSelect" aria-label="fl-select-country"
                                            wire:model.live="pickup_location" wire:change="pickupLocationDiscount">
                                            <option value="">{{ __('Select') }}</option>
                                            @foreach ($pickup_locations as $item)
                                                <option value="{{ $item->id }}">{{ $item->pickup_location }}
                                                </option>
                                            @endforeach

                                            {{-- <option value="3">Three</option> --}}
                                        </select>
                                        <label for="floatingSelect">{{ __('Pickup Location') }}<small
                                                class="text-danger">*</small></label>
                                        <small class="text-danger">
                                            @error('pickup_location')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    @if ($pickup_location)
                                        <div class="alert alert-info">
                                            <small>{{ \App\Models\PickupLocation::where('id', $pickup_location)->first()->description }}</small>
                                        </div>
                                    @endif
                                    {{-- <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="firstname"
                                                    placeholder="{{ __('First Name') }}" wire:model="first_name">
                                                <label for="firstname">{{ __('First Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="{{ __('Last Name') }}" wire:model="last_name">
                                                <label for="lastname">{{ __('Last Name') }}</label>
                                            </div>
                                        </div>
                                    </div> --}}


                                    <div class="form-floating mb-3">
                                        <input type="datetime-local"
                                            class="form-control @error('pickup_datetime') is-invalid @enderror"
                                            id="pickupdateandtime" placeholder="{{ __('Pickup Date & Time') }}"
                                            wire:model="pickup_datetime">
                                        <label for="pickupdateandtime">{{ __('Pickup Date & Time') }}<small
                                                class="text-danger">*</small></label>
                                        <small class="text-danger">
                                            @error('pickup_datetime')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control @error('message') is-invalid @enderror" placeholder="{{ __('Message') }}"
                                            id="message" wire:model="message" style="height: 100px"></textarea>
                                        <label for="message">{{ __('Message') }}</label>
                                        <small class="text-danger">
                                            @error('message')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>

                            @endif
                            {{--  --}}


                            <div class="mb-3">
                                <h6 class="mb-0">{{ __('Payment') }}</h6>
                                <small
                                    class="text-muted mb-3">{{ __('All transactions are secure and encrypted.') }}</small>
                                <div class="mb-3">

                                    <div class="accord-area border mt-3">
                                        <div class="accord-item">
                                            <div class="acc-container">
                                                <div class="">
                                                    <input class="form-check-input pm my-3 mx-2"
                                                        wire:model="payment_method" type="radio" id="pmcard"
                                                        checked value="card">
                                                    <label class="pm-check-label my-3" for="pmcard">
                                                        <span>{{ __('Credit card') }}</span>
                                                        <img src="{{ asset('media/svg/visa.svg') }}" alt="">
                                                        <img src="{{ asset('media/svg/master.svg') }}"
                                                            alt="">
                                                        <img src="{{ asset('media/svg/amex.svg') }}" alt="">


                                                    </label>
                                                    <section class="acd-section border-top border-bottom">
                                                        <div class="text-center">
                                                            <p class="fw-light">
                                                                {{ __('After clicking "Pay Credit card", you will be redirected to Stripe to complete your purchase securely.') }}
                                                            </p>
                                                        </div>
                                                    </section>
                                                </div>




                                            </div>

                                        </div>
                                        <div class="accord-item">
                                            <div class="acc-container">
                                                <div class="">
                                                    <input class="form-check-input pm my-3 mx-2"
                                                        wire:model="payment_method" type="radio" id="pmcod"
                                                        value="cod">
                                                    <label class="pm-check-label my-3" for="pmcod">
                                                        {{ __('Cash/Card for delivery or pickup') }}

                                                    </label>
                                                    {{-- <section class="acd-section border-top">
                                                        <div class="text-center">
                                                            <p class="fw-light">
                                                                {{ __('Pay with cash or card on delivery') }}
                                                            </p>
                                                        </div>
                                                    </section> --}}
                                                </div>




                                            </div>

                                        </div>

                                    </div>

                                </div>
                                @if ($delivery_method == 'home_delivery')
                                    <div>
                                        <h6>{{ __('Shipping to different address') }}</h6>
                                        <div class="accord-area border mt-3">
                                            <div class="accord-item">
                                                <div class="acc-container">
                                                    <div class="">
                                                        <input class="form-check-input pm my-3 mx-2"
                                                            name="payment_method" type="radio" id="sada"
                                                            value="default" wire:model.live="billing"
                                                            wire:click="getShippingCost">
                                                        <label class="pm-check-label my-3" for="sada">
                                                            <span>{{ __('Same as billing address') }}</span>



                                                        </label>
                                                        <section class="border-top">

                                                        </section>
                                                    </div>




                                                </div>

                                            </div>
                                            <div class="accord-item">
                                                <div class="acc-container">
                                                    <div class="">
                                                        <input class="form-check-input pm my-3 mx-2"
                                                            name="payment_method" type="radio" id="udba"
                                                            value="other" wire:model.live="billing"
                                                            wire:click="getShippingCost">
                                                        <label class="pm-check-label my-3" for="udba">
                                                            {{ __('Use different shipping address') }}

                                                        </label>
                                                        <section class="acd-section-h100 border-top">
                                                            <div class="form-floating mb-3">
                                                                <select
                                                                    class="form-select @error('shipping_location_other') is-invalid @enderror"
                                                                    id="floatingSelect" aria-label="fl-select-country"
                                                                    wire:model="shipping_location_other"
                                                                    wire:change="getShippingCost">
                                                                    <option value="">{{ __('Select') }}
                                                                    </option>
                                                                    @foreach ($shipping_locations as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->location }}</option>
                                                                    @endforeach

                                                                    {{-- <option value="3">Three</option> --}}
                                                                </select>
                                                                <label
                                                                    for="floatingSelect">{{ __('Country/Region') }}<small
                                                                        class="text-danger">*</small></label>
                                                                <small class="text-danger">
                                                                    @error('shipping_location_other')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </small>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text"
                                                                            class="form-control @error('first_name_other') is-invalid @enderror"
                                                                            id="firstname"
                                                                            placeholder="{{ __('First Name') }}"
                                                                            wire:model="first_name_other">
                                                                        <label
                                                                            for="firstname">{{ __('First Name') }}<small
                                                                                class="text-danger">*</small></label>
                                                                        <small class="text-danger">
                                                                            @error('first_name_other')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text"
                                                                            class="form-control @error('last_name_other') is-invalid @enderror"
                                                                            id="lastname"
                                                                            placeholder="{{ __('Last Name') }}"
                                                                            wire:model="last_name_other">
                                                                        <label
                                                                            for="lastname">{{ __('Last Name') }}<small
                                                                                class="text-danger">*</small></label>
                                                                        <small class="text-danger">
                                                                            @error('last_name_other')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control @error('address_other') is-invalid @enderror"
                                                                    id="Address" placeholder="{{ __('Address') }}"
                                                                    wire:model="address_other">
                                                                <label for="Address">{{ __('Address') }}<small
                                                                        class="text-danger">*</small></label>
                                                                <small class="text-danger">
                                                                    @error('address_other')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </small>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text"
                                                                            class="form-control @error('postal_code_other') is-invalid @enderror"
                                                                            id="postal_code"
                                                                            placeholder="{{ __('Postal Code') }}"
                                                                            wire:model="postal_code_other">
                                                                        <label
                                                                            for="postal_code">{{ __('Postal Code') }}<small
                                                                                class="text-danger">*</small></label>
                                                                        <small class="text-danger">
                                                                            @error('postal_code_other')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text"
                                                                            class="form-control @error('city_other') is-invalid @enderror"
                                                                            id="city"
                                                                            placeholder="{{ __('City') }}"
                                                                            wire:model="city_other">
                                                                        <label
                                                                            for="city">{{ __('City') }}<small
                                                                                class="text-danger">*</small></label>
                                                                        <small class="text-danger">
                                                                            @error('city_other')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control @error('phone_number_other') is-invalid @enderror"
                                                                    id="phone" placeholder="{{ __('Phone') }}"
                                                                    wire:model="phone_number_other">
                                                                <label for="phone">{{ __('Phone') }}<small
                                                                        class="text-danger">*</small></label>
                                                                <small class="text-danger">
                                                                    @error('phone_number_other')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </small>
                                                            </div>


                                                        </section>
                                                    </div>




                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                @endif
                                <div class="form-group mt-3">
                                    <button class="btn btn-lg btn-warning w-100">{{ __('PLACE ORDER') }}</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mob-padding">
                <div class="sticky-top" style="top: 80px;">

                    <div class="row">
                        <div class="col-lg-10">
                            <div class="container">

                                <div class="cart-items-list p-3">
                                    @if (session('cart'))
                                        @foreach (session('cart') as $item)
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="position-relative mini-image-wr">
                                                            @php
                                                                // get product model for crate slug
                                                                $product = \App\Models\Product::find(
                                                                    $item['product_id'],
                                                                );

                                                            @endphp
                                                            <a
                                                                href="{{ route('shop.product.show', ['id' => $product->slug]) }}">

                                                                <img src="{{ \App\Models\Media::where('product_id', $item['product_id'])->first()?->file_path }}"
                                                                    class="mini-image position-relative">
                                                            </a>
                                                            <span
                                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-dark b-2-solid-w">
                                                                {{ $item['quantity'] }} <span
                                                                    class="visually-hidden">unread
                                                                    messages</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="mb-0">{{ $item['name'] }}</h6>
                                                        <span
                                                            class="text-muted">{{ \App\Models\Variant::find($item['variant_id'])?->value }}</span>
                                                    </div>
                                                    <div class="col-3 text-right">
                                                        <h6 class="text-right fw-normal">
                                                            {{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }}
                                                            €</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif








                                </div>
                                {{-- <div class="mt-3 p-3">
                                    <div class="row">
                                        <div class="form-group col-8">
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Discount or gift card') }}">
                                        </div>
                                        <div class="form-group col-4">
                                            <button class="btn btn-outline-dark form-control">Apply</button>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="p-3 payment-area bg-white border mt-3 rounded">
                                    <div class="sk-pl" wire:loading.flex>
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <span>Subtotal items</span>

                                        </div>
                                        <div class="text-right">
                                            <span>{{ number_format($this->getCartValue(), 2, ',', '.') }} € </span>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <span>{{ __('Discount') }}
                                                ({{ number_format($dis_presentage, 0) }}%)</span>

                                        </div>
                                        <div class="text-right">
                                            <span>{{ number_format($dis_amount, 2, ',', '.') }} € </span>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between  mb-3">
                                        <div>
                                            <span>{{ __('Shipping') }} <i class="bi bi-info-circle-fill"
                                                    style="font-size:12px;"></i></span>

                                        </div>
                                        <div class="text-right">
                                            <span>{{ number_format($shipping_cost, 2, ',', '.') }} €</span>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between fw-bold">
                                        <div>
                                            <h5>Total</h5>

                                        </div>
                                        <div class="text-right">
                                            <span>{{ number_format($final_total, 2, ',', '.') }} €</span>

                                        </div>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



</div>
