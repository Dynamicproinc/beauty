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
                                    {{-- {{ __('​Our Tallow Balm brings the idea back to a modern form. Made from carefully purified Black Angus tallow.') }}</br>
                                    {{ __('The minimalist formulation, without excess ingredients, provides deep hydration and restores the natural balance, leaving the skin smooth and healthy.') }} --}}
                                    {{ __("Minimalist formulation, without unnecessary ingredients, rich in fatty acids and vitamins A, D, E and K, which can contribute to strengthening the skin's protective barrier and provide antioxidant protection, leaving the skin smooth and healthy.") }}
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
                                        <img src="{{ asset('media/images/tallow_balm.png') }}" alt="tallow skin care">

                                        <div class="sm-card-text">

                                            {{ __('100% Pure, Clean, and Traditionally Rendered') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        {{-- <img src="{{ asset('media/images/tsc_002.png') }}"> --}}
                                        <img src="{{ asset('media/images/tallow_skincare_citrus.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('Rich in vitamins A, D, E & K') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tallow_skincare_pure.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('Meticulously Crafted') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tallow_skincare_open_jar.png') }}"
                                            alt="tallow skin care">

                                        <div class="sm-card-text">

                                            {{ __('Pure Black Angus Tallow') }}
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
        {{--  --}}
        <section>
            <div class="floating-object-section">
                <div class="position-relative" style="padding:100px;">
                    <div class="text-center mb-5">


                        <h1 style="color:#322915;" class="tt-lg-sc text-uppercase">{{ __('sweet') }}</h1>
                        {{-- <h1 style="color:#1F1F1F;" class="tt-lg-sc text-uppercase">{{__('sweet')}}</h1> --}}
                        {{-- <h3 style="color: #ccc0a7" class="tt-lg-sc text-uppercase">{{__('citrus')}}</h3> --}}
                        <h3 style="color: #dfcca3" class="tt-lg-sc text-uppercase">{{ __('citrus') }}</h3>
                        <p class="sc-text-p d-sm-block d-none">
                            This citrus-scented tallow balm refreshes and nourishes the skin, <br>
                            keeping it soft and
                            energized all day for everyday use.
                        </p>
                        <p class="sc-text-p d-sm-none d-block">
                            This citrus-scented tallow balm <br>
                            refreshes and nourishes the skin,<br>
                            keeping it soft and energized <br>
                            all day for everyday use.
                        </p>
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <img src="{{ asset('media/images/sc_jar_hd.png') }}" alt="" class="img-flo">
                    </div>
                    <div class="d-flex justify-content-center">
                          <a href="/products" class="btn-1-xl-sc rounded-0">{{ __('OUR PRODUCTS') }}</a>
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
                            {{-- <img src="{{asset('media/images/tallow_balm.png')}}" alt="" class="img-fluid"> --}}
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
        {{-- full height section  --}}
        <section class="full-height-section">
            <div class="bg-with-image" style="">
                <div class="set-pad">
                    <div class="container">

                        <div class="">
                            <div class="flex-cont">
                                <div class="d-flex flex-column justify-content-between"
                                    style="height: 100vh;padding-top:100px;padding-bottom:100px">

                                    <div class="row justify-content-between">
                                        <div class="col-6 text-center p-3">
                                            <div class="abt-icon">
                                                {{-- <img src="{{ asset('media/images/arrow-top-left-to-down.svg') }}" alt=""> --}}
                                                <h1 class="tt-text-hero-md text-uppercase fz-small">{{ __('trnid1') }}
                                                </h1>
                                                <p class="fz-small">
                                                    {{ __('trnid2') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-center p-3">
                                            <div class="abt-icon">
                                                <h1 class="tt-text-hero-md text-uppercase fz-small">{{ __('trnid3') }}
                                                </h1>
                                                <p class="fz-small">
                                                    {{ __('trnid4') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-6 text-center p-3">
                                            <div class="abt-icon">
                                                <h1 class="tt-text-hero-md text-uppercase fz-small">{{ __('trnid5') }}
                                                </h1>
                                                <p class="fz-small">
                                                    {{ __('trnid6') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-center p-3">
                                            <div class="abt-icon">
                                                <h1 class="tt-text-hero-md text-uppercase fz-small">{{ __('trnid7') }}
                                                </h1>
                                                <p class="fz-small">
                                                    {{ __('trnid8') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- end full height section  --}}

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
                        <div class="carousel-cell ca-cel-re p-3" style="height:400px">
                            <div class="review-content">
                                {{-- style="background-image: url('{{ asset('media/images/card-bg-1.jpg') }}')"> --}}
                                <div>
                                    <h5>{{ __('NATURAL VITAMINS A, D, E & K') }}</h5>
                                    <p class="p-reviews">
                                        {{ __('trnid247') }}
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
                                        {{ __('trnid248') }}
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
                                        {{ __('trnid249') }}
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
                                        {{ __('trnid250') }}
                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        {{-- a word from owner --}}
        <section class="br-1-bg mb-0 mission-section">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="wff">
                                <div>
                                    <h1 class="tt-text-hero-md text-uppercase">
                                        {{ __('Mission statement') }}
                                    </h1>

                                    <p>
                                        {{ __('mission.statement') }}
                                    </p>
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
                            {{-- <div class="f-img-wr">

                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>



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
