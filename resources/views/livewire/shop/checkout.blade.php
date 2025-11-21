<div>
    <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="container">

                            <form>
                                <div>
                                    <div class="d-flex mb-3">
                                        <div>
                                            <input type="radio" id="hd" name="dtype" value="hd" class="d-type-radio">
                                            <label for="hd" class="btn-radio">
                                                Home Delivery
                                            </label>
                                        </div>
                                        <div class="mx-2">
                                            <input type="radio" id="pick" name="dtype" value="pick" class="d-type-radio">
                                            <label for="pick" class="btn-radio">
                                                Pickup at Shop
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mb-2">{{ __('Contact') }}</h5>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control form-control-sm" id="contact_email"
                                        placeholder="Email">
                                    <label for="contact_email">{{ __('Email') }}</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="checkChecked"
                                        checked>
                                    <label class="form-check-label" for="checkChecked">
                                        {{ __('Email me with news and offers') }}
                                    </label>
                                </div>
                                <h5>{{ __('Billing Information') }}</h5>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="fl-select-country">
                                        <option selected>Croatia</option>
                                        <option value="1">Slovania</option>
                                        <option value="2">Italy</option>
                                        {{-- <option value="3">Three</option> --}}
                                    </select>
                                    <label for="floatingSelect">{{ __('Country/Region') }}</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="firstname"
                                                placeholder="{{ __('First Name') }}">
                                            <label for="firstname">{{ __('First Name') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="lastname"
                                                placeholder="{{ __('Last Name') }}">
                                            <label for="lastname">{{ __('Last Name') }}</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Company"
                                        placeholder="{{ __('Company') }}">
                                    <label for="Company">{{ __('Company (Optional)') }}</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Address"
                                        placeholder="{{ __('Address') }}">
                                    <label for="Address">{{ __('Address') }}</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Address2"
                                        placeholder="{{ __('Address2') }}">
                                    <label for="Address2">{{ __('Appartment, Suite, etc. (Optional)') }}</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="postal_code"
                                                placeholder="{{ __('Postal Code') }}">
                                            <label for="postal_code">{{ __('Postal Code') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="city"
                                                placeholder="{{ __('City') }}">
                                            <label for="city">{{ __('City') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="{{ __('Phone') }}">
                                    <label for="phone">{{ __('Phone') }}</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="sinfo"
                                        checked>
                                    <label class="form-check-label" for="sinfo">
                                        {{ __('Save this information for next time') }}
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <h5 class="mb-0">{{ __('Payment') }}</h5>
                                    <small
                                        class="text-muted mb-3">{{ __('All transactions are secure and encrypted.') }}</small>
                                    <div class="mb-3">

                                        <div class="accord-area border mt-3">
                                            <div class="accord-item">
                                                <div class="acc-container">
                                                    <div class="">
                                                        <input class="form-check-input pm my-3 mx-2"
                                                            name="payment_method" type="radio" id="pmcard"
                                                            checked value="card">
                                                        <label class="pm-check-label my-3" for="pmcard">
                                                            <span>{{ __('Credit card') }}</span>
                                                            <img src="{{ asset('media/svg/visa.svg') }}"
                                                                alt="">
                                                            <img src="{{ asset('media/svg/master.svg') }}"
                                                                alt="">
                                                            <img src="{{ asset('media/svg/amex.svg') }}"
                                                                alt="">


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
                                                            name="payment_method" type="radio" id="pmcod"
                                                            value="cod">
                                                        <label class="pm-check-label my-3" for="pmcod">
                                                            {{ __('Cash on Delivery') }}

                                                        </label>
                                                        <section class="acd-section border-top">
                                                            <div class="text-center">
                                                                <p class="fw-light">
                                                                    {{ __('After clicking "Pay Cash on Delivery", you will be redirected to Stripe to complete your purchase securely.') }}
                                                                </p>
                                                            </div>
                                                        </section>
                                                    </div>




                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div>
                                        <h6>{{ __('Billing address') }}</h6>
                                        <div class="accord-area border mt-3">
                                            <div class="accord-item">
                                                <div class="acc-container">
                                                    <div class="">
                                                        <input class="form-check-input pm my-3 mx-2"
                                                            name="payment_method" type="radio" id="sada"
                                                            checked value="sada">
                                                        <label class="pm-check-label my-3" for="sada">
                                                            <span>{{ __('Same as delivery address') }}</span>



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
                                                            value="udba">
                                                        <label class="pm-check-label my-3" for="udba">
                                                            {{ __('Use different billing address') }}

                                                        </label>
                                                        <section class="acd-section-h100 border-top">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" id="floatingSelect"
                                                                    aria-label="fl-select-country">
                                                                    <option selected>Croatia</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <label
                                                                    for="floatingSelect">{{ __('Country/Region') }}</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="firstname"
                                                                            placeholder="{{ __('First Name') }}">
                                                                        <label
                                                                            for="firstname">{{ __('First Name') }}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="lastname"
                                                                            placeholder="{{ __('Last Name') }}">
                                                                        <label
                                                                            for="lastname">{{ __('Last Name') }}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="Company" placeholder="{{ __('Company') }}">
                                                                <label
                                                                    for="Company">{{ __('Company (Optional)') }}</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="Address" placeholder="{{ __('Address') }}">
                                                                <label for="Address">{{ __('Address') }}</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="Address2"
                                                                    placeholder="{{ __('Address2') }}">
                                                                <label
                                                                    for="Address2">{{ __('Appartment, Suite, etc. (Optional)') }}</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="postal_code"
                                                                            placeholder="{{ __('Postal Code') }}">
                                                                        <label
                                                                            for="postal_code">{{ __('Postal Code') }}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 form-group">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="city"
                                                                            placeholder="{{ __('City') }}">
                                                                        <label
                                                                            for="city">{{ __('City') }}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="phone" placeholder="{{ __('Phone') }}">
                                                                <label for="phone">{{ __('Phone') }}</label>
                                                            </div>


                                                        </section>
                                                    </div>




                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button class="btn btn-lg btn-primary w-100">PAY NOW</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">

                        <div class="row">
                            <div class="col-lg-10">
                                <div class="container">

                            <div class="cart-items-list p-3">
                                @if(session('cart'))
                                @foreach(session('cart') as $item)
                                <div class="mb-3">
                                    <div class="row">
                                    <div class="col-3">
                                        <div class="position-relative mini-image-wr">
                                            <img src="{{ \App\Models\Media::where('product_id', $item['product_id'])->first()?->file_path }}" class="mini-image position-relative">
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-dark b-2-solid-w"> {{ $item['quantity'] }} <span class="visually-hidden">unread messages</span></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-0">{{ $item['name'] }}</h6>
                                        <span class="text-muted">{{ \App\Models\Variant::find($item['variant_id'])?->value }}</span>
                                    </div>
                                    <div class="col-3 text-right">
                                        <h6 class="text-right fw-normal"> {{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }} €</h6>
                                    </div>
                                </div>
                                </div>
                                @endforeach
                                @endif
                                
                                
                                
                                
                                
                                
                                
                               
                            </div>
                            <div class="mt-3 p-3">
                                <div class="row">
                                    <div class="form-group col-8">
                                        <input type="text" class="form-control" placeholder="{{__('Discount or gift card')}}">
                                    </div>
                                    <div class="form-group col-4">
                                        <button class="btn btn-outline-dark form-control">Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between fw-light">
                                        <div>
                                            <span>Subtotal items</span>
                                            
                                        </div>
                                        <div class="text-right">
                                            <span>{{ number_format($total, 2, ',', '.') }} € </span>
                                             
                                        </div>
                                </div>
                                <div class="d-flex justify-content-between fw-light">
                                        <div>
                                            <span>Discount</span>
                                            
                                        </div>
                                        <div class="text-right">
                                            <span>{{number_format($disc, 2, ',', '.')}} € </span>
                                             
                                        </div>
                                </div>
                                <div class="d-flex justify-content-between fw-light mb-3">
                                        <div>
                                            <span>Shiping <i class="bi bi-info-circle" style="font-size:10px"></i></span>
                                            
                                        </div>
                                        <div class="text-right">
                                            <span>{{number_format($ship, 2, ',', '.')}} €</span>
                                            
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
