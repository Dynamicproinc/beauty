@extends('home')
@section('content-account')
    <div class="">
        <div class="row">
            <div class="col-lg-6">
                {{-- <div class="p-3 border rounded bg-white mb-3">
                    <div class="">
                       
                        <h6 class="fw-bold">{{ __('Join the Tallow Club') }}</h6>
                        <p class="small">{{ __('Earn rewards for referring friends to our web shop  and use rewards for the discounts!') }}</p>

                    </div>
                </div> --}}
                <div class="p-3 border rounded bg-white mb-3">
                    <div class="">

                        <h6 class="fw-bold">{{ __('Welcome back') }} <span
                                class="text-capitalize">{{ auth()->user()->name }}</span></h6>
                        <div>
                            <small class="small fw-light xs-text">{{ __('You have earned:') }}</small>
                            <div class="">
                                <h6 class="fw-normal">
                                    {{ $reward_wallet->expiry_date <= now() ? 0 : number_format($reward_wallet->balance ?? 0) }}
                                    Tallow Club Points
                                </h6>
                                <small class="small fw-light xs-text text-muted">{{ __('Your point expire on') }}
                                    {{ $reward_wallet?->expiry_date->format('d.m.Y') ?? __('N/A') }}
                                </small>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="border rounded bg-white mb-3">
                    <div class="py-3">

                        <div class="px-3 d-flex justify-content-between">
                            <h6 class="fw-bold">{{ __('Reward points activities') }}</h6>
                            <a href="#" class="btn btn-sm btn-link">{{__('See all')}}</a>
                        </div>
                        <div>
                            @if ($reward_wallet_transactions->count() > 0)
                                <ul class="list-group list-group-flush activity-list">
                                    @foreach ($reward_wallet_transactions as $transaction)
                                        <li class="list-group-item d-flex justify-content-between">
                                            <div>
                                                <div class="mb-0">
                                                    <small>{{ $transaction->description }}</small>
                                                </div>
                                                <div class="mt-0"><small
                                                        class="text-muted xs-text">{{ $transaction->created_at->format('d.m.Y H:i') }}</small>
                                                </div>
                                            </div>
                                            <small class="">{{ number_format($transaction->amount) }}</small>
                                        </li>
                                    @endforeach

                                </ul>
                            @else
                                <span class="small text-muted px-3 text-center">{{ __('No activities yet.') }}</span>
                            @endif


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-3 border rounded bg-white mb-3">
                    <div class="">
                        <div class="mb-3">
                            <h6 class="fw-bold">{{ __('Share & Earn!') }}</h6>
                            <span
                                class="small mb-3">{{ __('Invite your friends with your referral link and earn rewards when they make a purchase.') }}</span>
                        </div>
                        <div>
                            @livewire('account.referral.dashboard')
                        </div>
                    </div>
                </div>
                <div class="p-3 border rounded bg-white mb-3">
                    <div class="">
                        <div class="mb-3">
                            <h6 class="fw-bold">{{ __('Analytics') }}</h6>
                            <div>
                                <div class="row">
                                    <div class="col-3 text-center"><span class="xs-text text-muted">Clicks</span>
                                        <h6>{{ $referral_links?->getClicks() ? $referral_links->getClicks() : 0 }}</h6>
                                    </div>
                                    <div class="col-3 text-center"><span class="xs-text text-muted">Registrations</span>
                                        <h6>{{ $referral_links?->getRegistrations() ? $referral_links->getRegistrations() : 0 }}
                                        </h6>
                                    </div>
                                    <div class="col-3 text-center"><span class="xs-text text-muted">Purchases</span>
                                        <h6>{{ $referral_links?->getPurchases() ? $referral_links->getPurchases() : 0 }}
                                        </h6>
                                    </div>
                                    <div class="col-3 text-center"><span class="xs-text text-muted">Conversions</span>
                                        <h6>{{ $referral_links?->getConversions() ? $referral_links->getConversions() : 0 }}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
