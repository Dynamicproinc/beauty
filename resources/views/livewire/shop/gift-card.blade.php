<div>
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div>
                <h6> {{ __('Preview') }}</h6>
                @if ($pre_image)
                    <div class="g-card">
                        <div class="g-c-preview">
                            <img src="{{ asset('media/card_design/' . $pre_image) }}" alt="{{ $pre_image }}">
                            <div class="g-card-message">
                                <small class="text-uppercase" style="font-size: 11px;font-weight:600 "><span
                                        class="text-muted">From</span> {{ $from }} <span
                                        class="text-muted">To:</span> {{ $to }}</small>
                                <h6 class="mt-3">{{ $message_body }}</h6>
                            </div>
                            <div class="g-card-message">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        @if ($rate)
                                            <h5 class="tt-text-hero-md text-uppercase">
                                                {{ number_format($rate, 2, ',', '.') }}€</h5>
                                        @else
                                            <h5 class="tt-text-hero-md text-uppercase">
                                                {{ number_format(0, 2, ',', '.') }}€</h5>
                                        @endif
                                        <div class="tt-text-xs text-uppercase mb-2">
                                            <span>{{ __('Tallow skin care') }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('media/images/logo.png') }}" style="width:50px; height:50px">
                                    </div>
                                </div>
                            </div>
                            <div class="g-card-message text-center">
                                <h6 class="text-muted">GC-XXXXXXXXXXXX</h6>
                            </div>

                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-lg-8">
            <div>
                <form wire:submit="save">
                    <div class="tt-text-hero-md text-uppercase">

                        <p>{{ __('Treat Your Loved Ones to Nature’s Glow – Tallow Skincare Gift Card') }}</p>
                    </div>
                    <div>
                        <p class="fw-bold">
                            {{ __('1. Select the delivery method') }}
                        </p>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="options">
                                    {{ __('Email') }}
                                </div>
                                <div class="options options-disabled">
                                    {{ __('Delivery') }}
                                </div>
                            </div>
                            <div class="tallow-alert-bar">
                                <small
                                    class="text-small">{{ __('Please note that we are currently sending gift cards via email') }}</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="text-muted">{{ __('Select Design') }}</span>
                            <div class="d-flex flex-wrap">
                                @foreach ($card_designs ?? [] as $key => $item)
                                    <div class="grouped-radio">
                                        <input type="radio" id="dsg{{ $key }}" name="design"
                                            value="{{ $item->id }}" wire:model="design" class="d-none"
                                            wire:click="generatePreview({{ $item->id }})">

                                        <label for="dsg{{ $key }}" class="gift-card-design">
                                            <img src="{{ asset('media/card_design/' . $item->file_path) }}"
                                                alt="Design {{ $key }}">
                                        </label>
                                    </div>
                                @endforeach




                            </div>
                            @error('design')
                                <small class="fw-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <p class="fw-bold">
                                {{ __('2. Gift card details') }}
                            </p>
                            <div>
                                <div>
                                    <div class="mb-2"><span class="text-muted mb-2">{{ __('Amount') }}</span></div>
                                    <div class="d-flex mb-3">
                                        @foreach ($gift_card_rates ?? [] as $key => $item)
                                            <div class="grouped-radio">
                                                <input type="radio" id="rate{{ $key }}" name="rate"
                                                    value="{{ $item->amount }}" wire:model.live="rate" class="d-none">

                                                <label for="rate{{ $key }}" class="options-sm">
                                                    {{ $item->amount }} €
                                                </label>
                                            </div>
                                        @endforeach



                                    </div>
                                    @error('rate')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6 mb-2">
                                        <label for="" class="text-muted">{{ __('From') }}</label>
                                        <input type="text" class="form-control" wire:model.live="from">
                                        @error('from')
                                            <small class="fw-bold text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="text-muted">{{ __('To') }}</label>
                                        <input type="text" class="form-control" wire:model.live="to">
                                        @error('to')
                                            <small class="fw-bold text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="text-muted">{{ __('Message') }}</label>
                                    <textarea name="" class="form-control" placeholder="{{ __('Hope you are enjoy with this gift card') }}"
                                        wire:model.live="message_body"></textarea>
                                    @error('message_body')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="text-muted">{{ __('Email') }}</label>
                                    <div class="tallow-alert-bar">
                                        <small
                                            class="text-small">{{ __('Your gift card will be sent to this email address.') }}</small>
                                    </div>
                                   
                                    <input type="email" class="form-control" wire:model="email">
                                    @error('email')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <button class="tt_btn_theme w-100" type="submit" wire:loading.attr="disabled"
                                        wire:target="save">
                                        <span class="spinner-border spinner-border-sm mx-3" role="status" wire:loading
                                            wire:target="save">

                                        </span>
                                        {{ __('BUY NOW') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
