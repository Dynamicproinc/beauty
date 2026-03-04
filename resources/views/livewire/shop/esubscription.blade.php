<div>
    <div class="container">
        <form wire:submit="subscribe">
            <h5>{{ __('Subscribe to our newsletter') }}</h5>

            <p>
                {{ __('Subscribe to our newsletter and be the first to receive the latest updates, news, tips, and special offers directly in your inbox.') }}
            </p>

            <input type="email"
                   class="form-control mb-3"
                   placeholder="{{ __('Email address') }}"
                   wire:model="email">

            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="mb-3" wire:ignore>
                <div class="g-recaptcha"
                     data-sitekey="{{ config('services.recaptcha.site_key') }}"
                     data-callback="onRecaptchaSuccess">
                </div>

                @error('gRecaptchaResponse')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
          

            <button class="tt_btn_theme w-100 rounded-0">
                {{ __('Subscribe') }}
            </button>
        </form>
    </div>
    @push('scripts')
<script>
    function onRecaptchaSuccess(token) {
        @this.set('gRecaptchaResponse', token);
    }
</script>
@endpush
</div>