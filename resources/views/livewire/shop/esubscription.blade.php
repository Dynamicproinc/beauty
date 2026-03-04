<div>
    <div class="container">
        <form wire:submit="subscribe">
            <h5 class="">{{ __('Subscribe to our newsletter') }}</h5>
            <p class="">
                {{ __('Subscribe to our newsletter and be the first to receive the latest updates, news, tips, and special offers directly in your inbox. Join our community today and never miss important updates.') }}
            </p>

            {{-- <h6 class="fw-bold">{{ __('Subscribe to our newsletter') }}</h6> --}}
            <div class="">
                <label for="newsletterEmail" class="visually-hidden">
                    {{ _('Email address') }}
                </label>
                <input id="newsletterEmail" type="email" class="form-control mb-3" placeholder="{{ _('Email address') }}"
                    required wire:model="email">
                <div class="mb-3">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3" wire:ignore>
                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                        data-callback="onRecaptchaSuccess">
                    </div>

                    @error('gRecaptchaResponse')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <script>
    function onRecaptchaSuccess(token) {
        @this.set('gRecaptchaResponse', token);
    }
</script>


                <button class="tt_btn_theme w-100 rounded-0">
                    {{ __('Subscribe') }}
                </button>
            </div>
        </form>

    </div>
</div>
