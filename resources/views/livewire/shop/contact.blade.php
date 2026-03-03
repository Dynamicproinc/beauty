<div>
    <div class="card rounded-0">
        <div class="card-body">
            <h1 class="mb-4">{{ __('Contact Us') }}</h1>
            <p class="mb-4">
                {{ __('If you have any questions, concerns, or feedback, please feel free to reach out to us. We are here to assist you with any inquiries related to our products, orders, or anything else you may need help with.') }}
            </p>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="submit">

                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label">{{ __('Name') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">{{ __('Email') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">

                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label class="form-label">{{ __('Message') }}</label>
                    <textarea rows="5" class="form-control @error('message') is-invalid @enderror" wire:model="message"></textarea>

                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="tt_btn_theme w-100" wire:loading.attr="disabled">
                    <span wire:loading.remove>{{ __('Send Message') }}</span>
                    <span wire:loading>{{ __('Sending...') }}</span>
                </button>

            </form>
        </div>
    </div>
</div>
