@extends('layouts.app')

@section('content')
    <div>
        {{-- hero section --}}
        <section class="section hero-section">
            <div class="hero-wallpaper"></div>

            <div class="hero-text-wrapper p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-white text-bracket p-3">

                                <div class="tt-text-xs text-uppercase mb-2">
                                    <span>{{ __('Loved by thousands. Proven by nature.') }}</span>
                                </div>

                                <div class="tt-text-hero-md text-uppercase">
                                    <p class="mb-0">{{ __('Elite care. Essential purity.') }}</p>
                                    <p>{{ __('Clean as the source. Pure as the care.') }}</p>
                                </div>

                                <p class="sec_text_p_md fw-bold">
                                    {{ __('Discover the power of tallow for healthier, nourished skin') }}
                                </p>
                                {{-- add the product link --}}

                                <a href="/product/{{$selected_product->slug}}" class="tt_btn"
                                    title="{{ __('Buy now tallow skincare product') }}">{{ __('Buy Tallow Balm') }}</a>

                            </div>
                        </div>
                    </div>
                </div>
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
                                    {{ __('Why Tallow Skincare Has Become a Beauty Essential') }}
                                </h1>
                                <p class="sec_text_p_md">
                                    {{ __('Premium beef tallow has become a beauty essential because it works in harmony with the skin. Rich in vitamins A, D, E, and K, it deeply nourishes, strengthens the skin barrier, and enhances natural radiance. Pure, powerful, and time-honored, tallow delivers luxury your skin truly understands.') }}
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
                                        <img src="{{ asset('media/images/tllow_skin_care_fact_pure_black_angus04.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('Rich in vitamins A, D, E & K') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">

                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tllow_skin_care_fact_pure_black_angus02.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('100% Pure, Clean, and Traditionally Rendered') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tllow_skin_care_fact_pure_black_angus01.png') }}"
                                            alt="tallow skin care">

                                        <div class="sm-card-text">

                                            {{ __('Pure Black Angus Tallow') }}
                                        </div>
                                    </div>
                                </div>




                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="{{ asset('media/images/tllow_skin_care_fact_pure_black_angus03.png') }}">

                                        <div class="sm-card-text">

                                            {{ __('Meticulously Crafted') }}
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
                        <div class="col-lg-6 col-md-6">
                            <div class="obj-mid">
                                <h1 class="tt-text-hero-md text-uppercase text-center text-sm-start mb-0">
                                    {{ __('Available at') }}
                                </h1>
                                <h1 class="tt-text-hero-md text-uppercase text-center text-sm-start">
                                    {{ __('the m brothers in Velika gorica') }}
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="text-center text-sm-end text-white text-uppercase">
                                <img src="{{ asset('media/images/the-m-brothers.png') }}" alt="" class="img-fluid">

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
                        <div class="col-md-6 col-lg-6">
                            <div class="product-image-xl">
                                <img src="https://fatcowskin.com/cdn/shop/files/benefits_img.png?v=1746543799"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="text-sm-start" style="text-align: justify; text-align-last: left; hyphens: auto;">
                                <h5 class="">
                                    {{ __('Buy our tallow balm skin care cream and experience the transformative power of nature for your skin') }}
                                </h5>
                                <p class="">
                                    {{ __('Our tallow skincare cream is specially formulated with pure, natural ingredients to deeply nourish, hydrate, and protect your skin. Rich in skin-loving nutrients, it helps restore softness and support a healthy, radiant glow.') }}
                                </p>
                                <p>
                                    {{ __('Don’t wait — order yours today and give your skin the care it deserves.') }}
                                </p>
                                <a href="/product/{{$selected_product->slug}}"
                                    class="btn-1-xl rounded-0">{{ __('BUY NOW') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-type-1">
            <div class="reviews-section">
                <div class="reviews-section-content">
                    <div class="container mb-3 text-center">
                        <h1 class="tt-text-hero-md text-uppercase">
                            {{ __('Customer Reviews') }}
                        </h1>
                        <p>{{ __('See what our customers are saying about our products') }}</p>
                    </div>
                    <div class="main-carousel-3">
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="p-reviews">Lorem ipsum dolor sit amet, consectetur adipisicing elit. dolor
                                    repellendus similique fugiat nisi.</p>
                                <div class="text-muted">
                                    <p><small>Jane Doe - 2 Weeks ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="p-reviews">Expedita odio aperiam itaque a deserunt quos veniam consectetur est
                                    repudiandae beatae omnis vitae maiores incidunt magnam, dolor repellendus similique
                                    fugiat nisi.</p>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="p-reviews">Expedita odio aperiam itaque a deserunt quos veniam consectetur est
                                    repudiandae beatae omnis vitae maiores incidunt magnam, dolor repellendus similique
                                    fugiat nisi.</p>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="p-reviews">Expedita odio aperiam itaque a deserunt quos veniam consectetur est
                                    repudiandae beatae omnis vitae maiores incidunt magnam, dolor repellendus similique
                                    fugiat nisi.</p>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="p-reviews">Expedita odio aperiam itaque a deserunt quos veniam consectetur est
                                    repudiandae beatae omnis vitae maiores incidunt magnam, dolor repellendus similique
                                    fugiat nisi.</p>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="p-reviews">Expedita odio aperiam itaque a deserunt quos veniam consectetur est
                                    repudiandae beatae omnis vitae maiores incidunt magnam, dolor repellendus similique
                                    fugiat nisi.</p>
                            </div>
                        </div>
                        <div class="carousel-cell ca-cel-re p-3">
                            <div class="review-content">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="p-reviews">Expedita odio aperiam itaque a deserunt quos veniam consectetur est
                                    repudiandae beatae omnis vitae maiores incidunt magnam, dolor repellendus similique
                                    fugiat nisi.</p>
                            </div>
                        </div>
                    </div>
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
                                    {{ __('Everything You Need to Know About Tallow Balm') }}
                                </h1>
                                <p>
                                    {{ __('Discover the benefits, uses, and myths about tallow Balm. From its rich nutrient profile to its suitability for sensitive skin, we answer all your burning questions about this traditional beauty secret. Learn how tallow can transform your skincare routine and why it’s becoming a must-have for radiant, healthy skin.') }}
                                </p>

                                <p>{{ __('If you need more information, please contact us!') }}</p>
                                <div class="d-none d-lg-block">

                                    <a href="/contact-us" class="tt_btn"
                                        title="{{ __('Buy now tallow skincare product') }}">{{ __('Contact Us') }}</a>
                                </div>
                                <div class="d-block d-lg-none">

                                    <a href="/contact-us" class="tt_btn w-100"
                                        title="{{ __('Buy now tallow skincare product') }}">{{ __('Contact Us') }}</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-3">
                            <div class="faq-item">
                                <input type="radio" id="fq1" name="faq" class="faq-radio" value="fq1">
                                <label for="fq1" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold text-white text-uppercase text-sm">
                                            {{ __('faq.t.1') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="text-white faq-answer">
                                    {{ __('faq.d.1') }}
                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="radio" id="fq2" name="faq" class="faq-radio" value="fq1">
                                <label for="fq2" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.2') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="text-white faq-answer">
                                    {{ __('faq.d.2') }}
                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="radio" id="fq3" name="faq" class="faq-radio" value="fq1">
                                <label for="fq3" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.3') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="text-white faq-answer">
                                    {{ __('faq.d.3') }}

                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="radio" id="fq4" name="faq" class="faq-radio" value="fq1">
                                <label for="fq4" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.4') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="text-white faq-answer">
                                    {{ __('faq.d.4') }}
                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="radio" id="fq5" name="faq" class="faq-radio" value="fq1">
                                <label for="fq5" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.5') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="text-white faq-answer">
                                    {{ __('faq.d.5') }}
                                </p>
                            </div>
                            <div class="faq-item">
                                <input type="radio" id="fq6" name="faq" class="faq-radio" value="fq1">
                                <label for="fq6" class="faq-label">
                                    <div class="d-flex justify-content-between">

                                        <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">
                                            {{ __('faq.t.6') }}</h5>
                                        {{-- <span><i class="bi bi-plus"></i></span> --}}
                                    </div>
                                </label>

                                <p class="text-white faq-answer">
                                    {{ __('faq.d.6') }}
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  --}}
        {{-- a word from owner --}}
        <section class="br-1-bg medium-section mb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="d-flex align-items-center justify-content-center mid-item">
                                <div>
                                    <h1 class="tt-text-hero-md text-uppercase">
                                        {{ __('a word from our founder') }}
                                    </h1>
                                    <p>
                                        {{ __('At Tallow Skincare, we believe that skincare should be simple, honest, and close to nature. Our products are carefully crafted using high-quality, natural tallow to nourish and protect your skin the way it was meant to be cared for. Inspired by traditional wisdom and supported by a commitment to purity, we focus on clean ingredients without unnecessary additives. Every jar represents our dedication to quality, sustainability, and your skin’s natural balance. Thank you for trusting us to be part of your daily self-care journey. We are proud to create products that bring nature back to skincare. 🌿') }}

                                    </p>
                                    <div>
                                        <h6>
                                            Lorena Maturanec
                                            <small class="text-muted">Founder CEO</small>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="f-img-wr">
                                <img src="https://www.tallows.de/cdn/shop/files/ece-tallow.webp?v=1758472868&width=1000"
                                    alt="tallow-skin-care" class="">
                            </div>
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
