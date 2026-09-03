<div>
    @if (!$referral_link)
        <button class="btn btn-dark" wire:click="generateReferralLink" wire:loading.attr="disabled">
            {{ __('Generate your referral link') }}
        </button>
    @else
        <div class="ref-link mt-3">
            <div class="form-group mb-3">
                <input type="text" readonly disabled value="{{ route('referral.redirect', ['code' => $referral_link]) }}" class="form-control disabled">
            </div>
            <button class="btn btn-link ml-2"><i class="bi bi-copy"></i> {{ __('Copy Link') }}</button>
        </div>
    @endif

</div>
