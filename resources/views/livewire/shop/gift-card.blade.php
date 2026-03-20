<div>
    <div class="row">
        <div class="col-lg-4">
            <div>
                {{ __('Preview') }}
            </div>
        </div>
        <div class="col-lg-8">
            <div>
                <form wire:submit="save">
                    <div class="tt-text-hero-md text-uppercase">

                        <p>{{ __('Buy Tallow skin care gift card for your loved once') }}</p>
                    </div>
                    <div>
                        <p class="fw-bold">
                            {{ __('1. Select the delivery method') }}
                        </p>
                        <div class="d-flex mb-2">
                            <div class="options">
                                {{ __('Email') }}
                            </div>
                            <div class="options options-disabled">
                                Delivery
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="text-muted">{{ __('Select Design') }}</span>
                            <div class="d-flex flex-wrap">
                                @foreach ($card_designs ?? [] as $key => $item)
                                    <div class="grouped-radio">
                                        <input type="radio" id="dsg{{ $key }}" name="design"
                                            value="{{ $item->id }}" wire:model="design" class="d-none">

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
                                                    value="{{ $item->amount }}" wire:model="rate" class="d-none">

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
                                        <input type="text" class="form-control" wire:model="from">
                                        @error('from')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="text-muted">{{ __('To') }}</label>
                                        <input type="text" class="form-control" wire:model="to">
                                        @error('to')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="text-muted">{{ __('Message') }}</label>
                                    <textarea name="" class="form-control" placeholder="{{ __('Hope you are enjoy with this gift card') }}"
                                        wire:model="message_body"></textarea>
                                        @error('message_body')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="text-muted">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" wire:model="email">
                                    @error('email')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <button class="tt_btn_theme w-100" type="submit">{{ __('BUY NOW') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
