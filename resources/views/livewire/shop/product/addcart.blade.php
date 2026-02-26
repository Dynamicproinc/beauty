<div>
    <div>
        <div>
            <div style="height: 32px;">
                <div wire:target="updateVariant" wire:loading.remove>
                    <h1 class="font-weight-lighter price-hl">
                    @if ($selected_variant_data)
                        {{ number_format($selected_variant_data->additional_price, 2, ',', ' ') }} €
                    @else
                        {{ number_format($product->discounted_price, 2, ',', ' ') }} €
                    @endif

                </h1>
                </div>
                <div>
                <div wire:target="updateVariant" wire:loading>
                    <p class="placeholder-glow">
                        <span class="placeholder rounded custom-placeholder" style="min-height: 32px;width:100px"></span>
                        
                    </p>
                </div>

            </div>
            </div>

            
            <div class="star-rating  mb-3">
                <div class="f-4">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill text-muted"></i>
                    <i class="bi bi-star-fill text-muted"></i>
                    <small> 142 Reviews</small>
                </div>
            </div>
            @if (!count($product->getVariants()) > 0)
                @if ($product->track_quantity)
                    <div class="mb-2" style="height: 24px;">
                        @if ($product->quantity > 0)
                            <span> {{ $product->quantity }} <span
                                    class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">In-stock</span></span>
                        @else
                            <span
                                class="badge bg-danger-subtle border border-danger-subtle text-danger-emphasis rounded-pill">Out
                                of Stock</span>
                        @endif

                    </div>
                @endif
            @endif
        </div>
        <div class="select-variants">
            @if (count($product->getVariants()) > 0)
                <div class="mb-3"><small class="">{{ __('Weights') }}</small>
                </div>
                <div class="d-flex flex-wrap mb-3">
                    @foreach ($product->getVariants() as $variant)
                        <input type="radio" wire:model.live="selected_option" value="{{ $variant->id }}"
                            {{-- {{ $variant->quantity <= 0 ? 'disabled' : '' }} --}} wire:change="updateVariant('{{ $variant->id }}')"
                            id="variant{{ $variant->id }}" @class([
                                'disabled-vari-button' => $variant->quantity <= 0,
                                'vari-button' => $variant->quantity > 0,
                            ])>
                        <label for="variant{{ $variant->id }}" class="mb-2">
                            <div>
                                <span>{{ $variant->value }}</span>


                            </div>
                        </label>
                    @endforeach



                </div>
                @if ($product->track_quantity)
                    <div class="mb-2" style="height: 24px;">
                        <small class="text-muted">There {{ $selected_variant_data->quantity == 1 ? 'is' : 'are' }}
                            {{ $selected_variant_data->quantity }}
                            {{ Str::plural('product', $selected_variant_data->quantity) }} left</small>

                        {{-- <span> @if ($selected_variant_data) @if ($selected_variant_data->quantity <= 0) <span class="badge bg-danger-subtle border border-danger-subtle text-danger-emphasis rounded-pill">Out of Stock</span> @else  {{ __($selected_variant_data->quantity) }} <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">In-stock</span>@endif @endif</span> --}}
                    </div>
                @endif
            @endif


        </div>


        <div class="mb-4 mt-4">
            <div class="row mb-3">
                <div class="col-lg-4 form-group">
                    <div class="qty-box mb-3">
                        <div class="d-flex justify-content-between">
                            <div class="mid" style="width: 30%;" wire:click = "decrementQuantity"><i
                                    class="bi bi-dash"></i></div>
                            <div class="mid">
                                <input type="number" wire:model.live="quantity"
                                    class="form-control text-center qty-input" value="1" min="1"
                                    max="{{ $selected_variant_data?->quantity }}" style="width: 75px; height: 40px;">
                            </div>
                            <div class="mid" style="width: 30%;" wire:click = "incrementQuantity"><i
                                    class="bi bi-plus"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 form-group">
                    @if (count($product->getVariants()) > 0)
                        @if ($selected_variant_data?->quantity <= 0 || $total_variation_quantity <= 0)
                            <button class="btn-1-lg" disabled>{{ __('OUT OF STOCK') }}</button>
                        @else
                            <button class="btn-1-lg" wire:click = "addCart">
                                <span class="spinner-border spinner-border-sm mx-2" aria-hidden="true" wire:loading
                                    wire:target="addCart"></span>
                                {{ __('ADD TO BAG') }}
                            </button>
                        @endif
                    @else
                        @if ($product->track_quantity)
                            @if ($product->quantity > 0)
                                <button class="btn-1-lg" wire:click = "addCart">

                                    <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading
                                        wire:target="addCart"></span>
                                    {{ __('ADD TO CART') }}
                                </button>
                            @else
                                <button class="btn-1-lg" disabled>{{ __('OUT OF STOCK') }}</button>
                            @endif
                        @else
                            <button class="btn-1-lg" wire:click = "addCart">
                                <span class="spinner-border spinner-border-sm" role="status" wire:loading
                                    wire:target="addCart" aria-hidden="true"></span>
                                {{ __('ADD TO BAG') }}
                            </button>
                        @endif
                    @endif
                </div>
            </div>
            <div>
                @if (count($product->getVariants()) > 0)
                    @if ($selected_variant_data?->quantity <= 0 || $total_variation_quantity <= 0)
                        <a href="#">{{ __('Get notified when stock is available') }}</a>
                    @endif
                @endif

            </div>
        </div>

    </div>
</div>
