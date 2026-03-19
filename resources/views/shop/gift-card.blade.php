@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', __('Buy Gift Card'))
@section('meta')
    <meta name="description"
        content="Contact us for any inquiries, support, or feedback. We're here to assist you with your beauty needs. Reach out to us today!">
    <meta name="keywords" content="contact, support, inquiries, feedback, beauty products, customer service">
@endsection
@section('content')
    <div class="container">
        <div style="height:150px"></div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="gift-area p-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                 {{ __('Preview') }}
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <div class="tt-text-hero-md text-uppercase">

                                    <p>{{ __('Buy Tallow skin care gift card for your loved once') }}</p>
                                </div>
                                <div>
                                    <p class="fw-bold">
                                        {{ __('1. Select the delivery method') }}
                                    </p>
                                    <div class="d-flex mb-2">
                                        <div class="options">
                                            Online
                                        </div>
                                        <div class="options">
                                            Delivery
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="text-muted">{{__('Select Design')}}</span>
                                        <d class="d-flex flex-wrap">
                                                <div class="gift-card-design">
                                                    <img src="https://www.shutterstock.com/image-vector/happy-birthday-greeting-card-clipart-600nw-2557598275.jpg" alt="">
                                                </div>
                                                <div class="gift-card-design">
                                                    <img src="https://thehrbpstory.com/wp-content/uploads/2018/04/memberappreciation.jpg" alt="">
                                                </div>
                                                <div class="gift-card-design">
                                                    <img src="https://www.pockethrms.com/wp-content/uploads/2024/03/Best-Happy-Womens-Day-Wishes-and-Quotes-scaled.webp" alt="">
                                                </div>
                                                <div class="gift-card-design">
                                                    <img src="https://courtsofrayleigh.co.uk/wp-content/uploads/bb-plugin/cache/valentines-day-panorama-1b35f28d97179eb9d4b7d8390dc3ec76-lgvy0hoq38nw.jpg" alt="">
                                                </div>
                                        </d>
                                    </div>
                                    <div>
                                         <p class="fw-bold">
                                        {{ __('2. Gift card details') }}
                                    </p>
                                    <div>
                                        <div class="mb-2"><span class="text-muted mb-2">{{__('Amount')}}</span></div>
                                        <div class="d-flex mb-3">
                                        <div class="options-sm">
                                            20 €
                                        </div>
                                        <div class="options-sm">
                                            40 €
                                        </div>
                                        <div class="options-sm">
                                            50 €
                                        </div>
                                        <div class="options-sm">
                                           100 €
                                        </div>
                                        
                                    </div>
                                     <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <label for="" class="text-muted">{{__('From')}}</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                             <label for="" class="text-muted">{{__('To')}}</label>
                                            <input type="text" class="form-control">
                                        </div>
                                     </div>
                                     <div class="form-group mb-3">
                                          <label for="" class="text-muted">{{__('Message')}}</label>
                                        <textarea name="" class="form-control" placeholder="{{__('Hope you are enjoy with this gift card')}}"></textarea>
                                     </div>
                                     <div class="mb-3">
                                        <label for="" class="text-muted">{{__('Email')}}</label>
                                        <input type="email" class="form-control">
                                     </div>
                                     <div class="mb-5">
                                        <button class="tt_btn_theme w-100">{{__('Plcae your order')}}</button>
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
    </div>

@endsection
