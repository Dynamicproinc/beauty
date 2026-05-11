@extends('layouts.app')

@section('content')
    <div>
        {{-- hero section --}}
        <section class="section hero-section">
            <div class="wrap-overlay"></div>
            <div class="hero-wallpaper">
                <div class="d-none d-sm-block">
                    <video width="100%" autoplay muted playsinline loop>
                        <source src="{{ asset('media/videos/tsc_desktop_v1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="d-block d-sm-none">
                    <video width="100%" height="100%" autoplay muted playsinline loop>
                        <source src="{{ asset('media/videos/tsc_green_theme-mobile-v1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <div class="hero-text-wrapper p-3">
                
                <div>
                   
                     <div class="tt-text-xs text-uppercase mb-2">
                                    {{-- <span>{{ __('Less is more, even in skincare.') }}</span> --}}
                                </div>

                                <div class="tt-text-hero-md mb-5">
                                   
                                    <p class="hero-text-md">{{ __('Pure care the kind that skin has always understood') }}</p>
                                </div>

                              

                                <a href="/products" class="tt_btn"
                                    title="{{ __('Buy now tallow skincare product') }}">{{ __('OUR PRODUCTS') }}</a>
                </div>
                 
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-white text-bracket p-3">

                                <div class="tt-text-xs text-uppercase mb-2">
                                    <span>{{ __('Less is more, even in skincare.') }}</span>
                                </div>

                                <div class="tt-text-hero-md text-uppercase">
                                   
                                    <p>{{ __('Pure care the kind that skin has always understood') }}</p>
                                </div>

                              

                                <a href="/products" class="tt_btn"
                                    title="{{ __('Buy now tallow skincare product') }}">{{ __('OUR PRODUCTS') }}</a>

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

        {{-- section 01 --}}
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="tt_mid_c">
                            <div class="p-3">
                                <h1 class="tt-text-hero-md text-uppercase">
                                    {{-- {{ __('Simple skin care means few ingredients, full of benefits.') }} --}}
                                    {{ __('Minimalist, nourishing care made with Black Angus tallow') }}
                                </h1>
                                <p class="sec_text_p_md">
                                    {{-- {{ __('Our beef tallow hydrates, nourishes and supports your skins barrier without overloading it. That is exactly what Tallow does because it is so similar to skin naturally. Skincare with tallow is care that works reduced to the essentials.') }} --}}
                                  {{__('​Our Tallow Balm brings the idea back to a modern form. Made from carefully purified Black Angus tallow.')}}</br>
                                  {{__('The minimalist formulation, without excess ingredients, provides deep hydration and restores the natural balance, leaving the skin smooth and healthy.')}}
                                </p>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        {{--  --}}
                        <div class="thumb-areas p-3">
                            <div class="main-carousel-2">
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        {{-- <img src="{{ asset('media/images/tsc_002.png') }}"> --}}
                                        <img src="{{ asset('media/images/tsc_2.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('Rich in vitamins A, D, E & K') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tsc_bottle_on_grass.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('Meticulously Crafted') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tsc_production.jpg') }}" alt="tallow skin care">

                                        <div class="sm-card-text">

                                            {{ __('Pure Black Angus Tallow') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-cell">

                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tsc_box_bottle.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('100% Pure, Clean, and Traditionally Rendered') }}
                                        </div>
                                    </div>
                                </div>













                            </div>

                        </div>
                        {{--  --}}
                    </div>
                </div>
            </div>
        </section>
        {{-- section 3 --}}
        <section>
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="obj-mid">
                                <p class="tt-text-hero-md text-uppercase text-center text-sm-start mb-0">
                                    {{ __('Purified beef tallow is one of the ingredients that most closely resembles human skin.') }}
                                </p>
                                <p class="text-center text-sm-start mb-0">
                                    {{ __('It is an ancient skin care product, not a new popular ingredient.') }}
                                </p>
                                {{-- <h1 class="tt-text-hero-md text-uppercase text-center text-sm-start">
                                    {{ __('the m brothers in Velika gorica') }}
                                </h1> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="text-center text-sm-end text-white text-uppercase">
                                <div>
                                    <div>
                                        <img src="{{ asset('media/images/logo.png') }}" alt="tallow skin care"
                                            class="img-fluid mb-3">
                                    </div>
                                    <a href="/our-story" class="tt_btn"
                                        title="{{ __('Our story') }}">{{ __('Our story') }}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            {{-- <div class="tb-p bg-white">
                <div class="container">
                    <div class="d-flex justify-content-center mb-5">
                        <h1 class="tt-text-hero-md text-uppercase">{{ __('nature meets science') }}</h1>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="text-center p-3">
                                <h1 class="tt-text-xl fw-bold">97 %</h1>
                                <p class="sec_text_p_md fw-normal">
                                    report significantly reduced dryness and tightness*.
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="text-center p-3">
                                <h1 class="tt-text-xl fw-bold">80 %</h1>
                                <p class="sec_text_p_md fw-normal">
                                    report significantly reduced dryness and tightness*.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="text-center p-3">
                                <h1 class="tt-text-xl fw-bold">75 %</h1>
                                <p class="sec_text_p_md fw-normal">
                                    Skin flaking is reduced by up to 83%. (Instrumental measurement)*
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="text-center p-3">
                                <h1 class="tt-text-xl fw-bold">86 %</h1>
                                <p class="sec_text_p_md fw-normal">
                                    Reduktion des transepidermalen Wasserverlustes (Haut-Feuchtigkeitsverlust) um bis zu
                                    63%*
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center text-center">
                        <small class="text-muted text-uppercase tt-text-xs lh-1">* Independent clinical 4-week study with 31
                            female participants (2025). Barrier Repair Pur applied once daily.</small>
                    </div>
                </div>
            </div> --}}

            <div class="medium-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-3">
                            <div class=""
                                style="height:100%;width:100%;background:white;border: 1px solid white;overflow:hidden">
                                <video autoplay muted playsinline loop
                                    style="height: 110%;width:110%;background:white;border: 1px solid white;object-fit:cover;object-position:center;">
                                    <source src="{{ asset('media/videos/tallow_bottle.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="">
                                <h5 class="tt-text-hero-md fw-bold text-uppercase mb-3 text-center">
                                    {{ __('Tallow helps the skin to maintain its natural balance, effectively and without suspicious supplements.') }}
                                </h5>

                                <div class="text-center">

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="">
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="{{ asset('media/svg/icon1.svg') }}" alt=""
                                                        class="b-icon">
                                                </div>
                                                <div class="">
                                                    {{ __('No artificial fragrances Ideal for even the most sensitive skin types') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex justify-content-center mb-3">
                                                <img src="{{ asset('media/svg/icon2.svg') }}" alt=""
                                                    class="b-icon">
                                            </div>
                                            {{ __('Free of parabens and phenols Gentle and skin-friendly formula') }}
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-center mb-3">
                                                <img src="{{ asset('media/svg/icon3.svg') }}" alt=""
                                                    class="b-icon">
                                            </div>
                                            {{ __('Free of harmful substances Pure care ideal for your skins health') }}
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex justify-content-center mb-3">
                                                <img src="{{ asset('media/svg/icon4.svg') }}" alt=""
                                                    class="b-icon">
                                            </div>
                                            {{ __('Free of microplastics Good for the skin and the environment') }}
                                        </div>
                                    </div>
                                </div>
                                <a href="/products" class="btn-1-xl rounded-0">{{ __('OUR PRODUCTS') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fixed-section" style="">
            <div class="wrap-overlay"></div>
            <div class="fs-content text-center">
                <img src="{{ asset('media/images/the-m-brothers.png') }}" alt="The M Brothers Tallow">
                <p class="tt-text-hero-md text-uppercase text-center text-white">
                    {{ __('Powered by a Premium Ingredient at the Heart of Our Tallow Skincare') }}
                </p>
                <div class="text-white">
                    {{ __('fixed.section.description') }}
                </div>
            </div>

        </section>

        {{-- faq --}}
        <section class="section-padding section-primary" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="mid-cont p-3 mb-3">
                            <div>
                                <h1 class="tt-text-hero-md text-uppercase">
                                    {{ __('Everything You Need to Know About our tallow skin care produts') }}
                                </h1>
                                <p>
                                    {{ __('Our tallow is ultra-purified through a specialized, all-natural filtration process. By removing impurities without compromising quality, we ensure a clean, non-greasy finish that nourishes your skin with only the most essential nutrients.') }}
                                </p>

                                <p>{{ __('If you need more information, please contact us!') }}</p>
                                <div class="d-none d-lg-block">

                                    <a href="/contact-us" class="tt_btn"
                                        title="{{ __('Buy now tallow skincare product') }}">{{ __('Contact Us') }}</a>
                                </div>
                                <div class="d-block d-lg-none">

                                    <a href="/contact-us" class="tt_btn w-100 text-center"
                                        title="{{ __('Buy now tallow skincare product') }}">{{ __('Contact Us') }}</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-3">
                            <div class="faq-item">
                                <input type="checkbox" id="fq1" name="faq1" class="faq-radio" value="fq1">
                                <label for="fq1" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold faq-text text-uppercase text-sm">
                                            {{ __('faq.t.1') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="faq-text faq-answer">
                                    {{ __('faq.d.1') }}
                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="checkbox" id="fq2" name="faq2" class="faq-radio" value="fq1">
                                <label for="fq2" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold faq-text text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.2') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="faq-text faq-answer">
                                    {{ __('faq.d.2') }}
                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="checkbox" id="fq3" name="faq3" class="faq-radio" value="fq1">
                                <label for="fq3" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold faq-text text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.3') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="faq-text faq-answer">
                                    {{ __('faq.d.3') }}

                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="checkbox" id="fq4" name="faq4" class="faq-radio" value="fq1">
                                <label for="fq4" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold faq-text text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.4') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="faq-text faq-answer">
                                    {{ __('faq.d.4') }}
                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="checkbox" id="fq5" name="faq5" class="faq-radio" value="fq1">
                                <label for="fq5" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold faq-text text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.5') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="faq-text faq-answer">
                                    {{ __('faq.d.5') }}
                                </p>
                            </div>
                            {{-- <div class="faq-item">
                                <input type="radio" id="fq6" name="faq" class="faq-radio" value="fq1">
                                <label for="fq6" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.6') }}</h5>
                                       
                                    </div>
                                </label>

                                <p class="text-white faq-answer">
                                    {{ __('faq.d.6') }}
                                </p>
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  --}}
        

        <section class="section-type-1">
            <div class="reviews-section">
                <div class="reviews-section-content">
                    <div class="container mb-3 text-center">
                        <h1 class="tt-text-hero-md text-uppercase">
                            {{ __('WHY TALLOW?') }}
                        </h1>
                        <p>{{ __('SUPERFOOD FOR THE SKIN') }}</p>
                    </div>
                    <div class="main-carousel-3">
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                {{-- style="background-image: url('{{ asset('media/images/card-bg-1.jpg') }}')"> --}}
                                <div>
                                    <h5>{{ __('NATURAL VITAMINS A, D, E & K') }}</h5>
                                    <p class="p-reviews">
                                        {{ __('Stimulate skin regeneration and provide protection against free radicals.') }}
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                {{-- style="background-image: url('{{ asset('media/images/card-bg-2.jpg') }}')"> --}}
                                <div>
                                    <h5>{{ __('SKIN-IDENTICAL LIPIDS') }}</h5>
                                    <p class="p-reviews">
                                        {{ __('Offer optimal absorption while repairing and strengthening the skin’s protective barrier.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                {{-- style="background-image: url('{{ asset('media/images/card-bg-3.jpg') }}')"> --}}
                                <div>
                                    <h5>{{ __('ANTIOXIDANTS') }}</h5>
                                    <p class="p-reviews">
                                        {{ __('Shield the skin from environmental stressors and prevent premature aging.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                {{-- style="background-image: url('{{ asset('media/images/card-bg-4.jpg') }}')"> --}}
                                <div>
                                    <h5>{{ __('ESSENTIAL FATTY ACIDS') }}</h5>
                                    <p class="p-reviews">
                                        {{ __('Enriched with Omega-3 and Omega-6 to fortify the skin barrier and ensure deep, long-lasting hydration.') }}
                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        {{-- a word from owner --}}
        <section class="br-1-bg medium-section mb-0" style="background-image: url('https://brentbergherm.com/wp-content/gallery/croatia-landscape/THR_1062-17.jpg');background-size:cover;background-position:center;">
            <div class="container">
                <div class="row justify-content-center">
                    {{-- <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class=" wff">
                                <div>
                                    <h1 class="tt-text-hero-md text-uppercase">
                                        {{ __('a word from our founder') }}
                                    </h1>
                                  
                                    <p>{{ __('After a year and a half of research, testing, and sharing experiences, we founded Tallow skin care in 2025.') }}
                                    </p>
                                    <p>{{ __('The base for the products, beef tallow, comes from the brand The M Brothers, who breed Black Angus, which is a prerequisite for us to know what we are working with and to have a reliable base for tallow cosmetics.') }}
                                    </p>
                                    <p>{{ __('To begin with, we have formulated unique, multi-purpose products that meet the skins needs for hydration and nutrition and complete them with natural active ingredients.') }}
                                    </p>
                                    <p>{{ __('We believe that skin health is not only determined by the product we apply to the skin, but is much more complex, and therefore we want to raise awareness of the importance of the health of our entire body.') }}
                                    </p>
                                    <p>{{ __('Let your skin be a mirror of whats going on inside!') }}</p>
                                    <div>
                                        <h6>
                                            Lorena Maturanec
                                            <small class="text-muted">{{ __('Founder CEO') }}</small>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="f-img-wr">
                                    
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-5 text-center">
                         <div class="tt-text-hero-md mb-5">
                                   
                                    <h1 class="hero-text-md text-white mb-3">{{ __('The old ways are the best ways.') }}</h1>
                                    <p class="text-white section-text">{{__("Chemical creams and petroleum potions are not your friends. The skin is our body's biggest organ. We become what we use and absorb.")}}</p>
                                </div>
                                <div>
                                    <a href="/products" class="tt_btn"
                                        title="{{ __('explore products') }}">{{ __('Explore more  Products') }}</a>
                                </div>
                          
                    </div>
                </div>
            </div>
        </section>
        {{-- <section>
            <div class="marquee">
                <div class="marquee-content">
                    <div class="">
                        <span>🌿 100% Pure Black Angus Tallow • Natural • Clean • Traditional • Premium Quality •</span>
                    </div>
                </div>
            </div>
            <style>
               
            </style>


<div class="running-line-wrapper">
  <div class="running-line">
    <!-- The overall width of the text element should be twice the width of the screen -->
    <span>100% Pure Black Angus Tallow🌿</span>
    <span>Natural🌿</span>
    <span>Clean🌿</span>
    <span>Traditional🌿</span>
    <span>Premium Quallity🌿</span>
  </div>
</div>
        </section> --}}


    </div>
    <script>
        var el2 = document.querySelector('.main-carousel-2');
        var el3 = document.querySelector('.main-carousel-3');

        var fl2 = new Flickity(el2, {
            // options
            cellAlign: 'left',
            contain: true,
            freeScroll: true,

            // disable previous & next buttons and dots

            pageDots: false
        });

        var fl3 = new Flickity(el3, {
            cellAlign: 'left',
            contain: true,
            freeScroll: true,

            pageDots: false
        });
    </script>
@endsection
