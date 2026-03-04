<div>
    <form wire:submit="subscribe">
        <h5 class="text-white">{{ __('About Tallow Skincare') }}</h5>
        <p class="text-white">
            {{ __('Tallow skincare is a premium, natural skincare line made from 100% pure beef tallow. It is rich in vitamins A, D, E, and K and is designed to nourish and protect your skin.') }}
        </p>

        <h6 class="fw-bold">{{ __('Subscribe to our newsletter') }}</h6>
        <div class="">
            <label for="newsletterEmail" class="visually-hidden">
                {{ _('Email address') }}
            </label>
            <input id="newsletterEmail" type="email" class="form-control mb-3" placeholder="{{ _('Email address') }}"
                required wire:model="email">
            <div>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <input type="hidden" wire:model="recaptchaToken">

            <button class="btn btn-light w-100 rounded-0">
                {{ __('Subscribe') }}
            </button>
        </div>
    </form>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }} ', {
                    action: 'subscribe'
                })
                .then(function(token) {
                    @this.set('recaptchaToken', token);
                });
        });
    </script>
</div>
