@extends('layouts.app')
@section('title', __('Our Story'))
@section('content')
    <div>
        <section>
            <div class="big-picture">
            <img src="{{ asset('media/images/our-story.png') }}" alt="{{ __('Our story') }}">
            <div class="big-picture-content">
                <div class="">
                   <div class="text-center">
                     <img src="{{ asset('media/images/logo.png') }}" alt="Tallow Skin Care" style="width: 64px; height:auto">
                    <div class="tt-text-xs text-uppercase mb-2 mt-3">
                        <span>{{ __('Our Story') }}</span>
                    </div>
                   </div>
                    <p class="tt-text-hero-md text-uppercase text-center mb-0">
                                    {{ __('Natural balance is the most important.') }}
                                </p>
                                <div class="mt-3 text-center p-3">
                                    <p class="p-3">{{__('Tallow skin care was born out of personal enthusiasm and over the past year and a half has grown into a real project to create natural skin care products.')}}</p>
                                    {{-- <p>{{__('After a year and a half of research, testing, and sharing experiences, we founded Tallow skin care in 2025.')}}</p>
                                    <p>{{__('The base for the products, beef tallow, comes from the brand The M Brothers, who breed Black Angus, which is a prerequisite for us to know what we are working with and to have a reliable base for tallow cosmetics.')}}</p>
                                    <p>{{__('To begin with, we have formulated unique, multi-purpose products that meet the skins needs for hydration and nutrition and complete them with natural active ingredients.')}}</p>
                                    <p>{{__('We believe that skin health is not only determined by the product we apply to the skin, but is much more complex, and therefore we want to raise awareness of the importance of the health of our entire body.')}}</p>
                                    <p>{{__('Let your skin be a mirror of whats going on inside!')}}</p> --}}
                                    <a href="#founders-word" class="tt_btn"
                                    title="{{ __('Our story') }}">{{ __('Our story') }}</a>
                                </div>
                </div>
            </div>
        </div>
        </section>
         <section class="br-1-bg medium-section mb-0" id="founders-word">
          <div class="row justify-content-center">
            <div class="col-lg-6">
                  <div class="container">
                  <div class="">
                                <div>
                                    <h1 class="tt-text-hero-md text-uppercase">
                                        {{ __('a word from our founder') }}
                                    </h1>
                                    {{-- <p>
                                        {{ __('At Tallow Skincare, we believe that skincare should be simple, honest, and close to nature. Our products are carefully crafted using high-quality, natural tallow to nourish and protect your skin the way it was meant to be cared for. Inspired by traditional wisdom and supported by a commitment to purity, we focus on clean ingredients without unnecessary additives. Every jar represents our dedication to quality, sustainability, and your skin’s natural balance. Thank you for trusting us to be part of your daily self-care journey. We are proud to create products that bring nature back to skincare. 🌿') }}

                                    </p> --}}
                                     <p>{{__('After a year and a half of research, testing, and sharing experiences, we founded Tallow skin care in 2025.')}}</p>
                                    <p>{{__('The base for the products, beef tallow, comes from the brand The M Brothers, who breed Black Angus, which is a prerequisite for us to know what we are working with and to have a reliable base for tallow cosmetics.')}}</p>
                                    <p>{{__('To begin with, we have formulated unique, multi-purpose products that meet the skins needs for hydration and nutrition and complete them with natural active ingredients.')}}</p>
                                    <p>{{__('We believe that skin health is not only determined by the product we apply to the skin, but is much more complex, and therefore we want to raise awareness of the importance of the health of our entire body.')}}</p>
                                    <p>{{__('Let your skin be a mirror of whats going on inside!')}}</p>
                                    <div>
                                        <h6>
                                            Lorena Maturanec
                                            <small class="text-muted">Founder CEO</small>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                             <div class="text-center">
                            <div class="f-img-wr">
                                <img src="https://www.tallows.de/cdn/shop/files/ece-tallow.webp?v=1758472868&width=1000"
                                    alt="tallow-skin-care" class="">
                            </div>
                        </div>
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                          
                        </div>
                       
                    </div>
                </div>
            </div>
            </div>
          </div>
        </section>
    </div>
@endsection
