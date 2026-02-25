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
                                    <span>150,000+ {{__('satisfied customers')}}</span>
                                </div>

                                <div class="tt-text-hero-md text-uppercase">
                                    <p class="mb-0">{{__('Premium care, zero compromise')}}</p>
                                    <p>{{__('Pure care. No compromises.')}}</p>
                                </div>

                                <p class="sec_text_p_md fw-bold">
                                    {{__('Discover the power of tallow for healthier, nourished skin')}}
                                </p>
                                {{-- add the product link --}}

                                <a href="/product/tallow-skin-care-cream-330g" class="tt_btn" title="{{__('Buy now tallow skincare product')}}">{{ __('Secure the deal') }}</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- section 01 --}}
        <section class="md-section tb-p">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="tt_mid_c">
                            <div>
                                <h1 class="tt-text-hero-md text-uppercase">
                                    {{__('Why Tallow Skincare Has Become a Beauty Essential')}}
                                </h1>
                                <p class="sec_text_p_md">
                                    {{__('Premium beef tallow has become a beauty essential because it works in harmony with the skin. Rich in vitamins A, D, E, and K, it deeply nourishes, strengthens the skin barrier, and enhances natural radiance. Pure, powerful, and time-honored, tallow delivers luxury your skin truly understands.')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        {{--  --}}
                        <div class="thumb-areas">
                            <div class="main-carousel-2">
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img
                                            src="{{asset('media/images/tllow_skin_care_fact_pure_black_angus01.png')}}" alt="tallow skin care">

                                        <div class="sm-card-text">

                                        {{__('Pure Black Angus Tallow')}}
                                        </div>
                                    </div>
                                </div>



                                <div class="carousel-cell">

                                    <div class=" mb-3 cr-cont">
                                        <img
                                            src="{{asset('media/images/tllow_skin_care_fact_pure_black_angus02.png')}}">

                                        <div class="sm-card-text">

                                            {{__('100% Pure, Clean, and Traditionally Rendered')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img
                                            src="{{asset('media/images/tllow_skin_care_fact_pure_black_angus03.png')}}">

                                        <div class="sm-card-text">

                                            {{__('Meticulously Crafted')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img
                                            src="{{asset('media/images/tllow_skin_care_fact_pure_black_angus04.png')}}">

                                        <div class="sm-card-text">

                                            {{__('Rich in vitamins A, D, E & K')}}
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
        <section>
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
                            <h5 class="text-sm-start text-center">
                                Sometimes you just want to get to know a new skincare routine—step by step, without feeling
                                overwhelmed.
                            </h5>
                            <p class="text-center text-sm-start">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus doloribus unde nam
                                excepturi maxime accusantium illo aut culpa distinctio vitae at, hic tempora deserunt,
                                quasi, esse omnis ab. Neque, nobis.</p>
                            <a href="/product/tallow-skin-care-cream-330g" class="btn-1-xl rounded-0">{{ __('ADD TO CART') }}</a>
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
                        <div class="carousel-cell ca-cel-re">
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
                        <div class="carousel-cell ca-cel-re">
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
                        <div class="carousel-cell ca-cel-re">
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
                        <div class="carousel-cell ca-cel-re">
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
                        <div class="carousel-cell ca-cel-re">
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
                        <div class="carousel-cell ca-cel-re">
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
                        <div class="carousel-cell ca-cel-re">
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
         <section class="section-padding section-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mid-cont p-3 mb-3">
                        <div>
                            <h1 class="tt-text-hero-md text-uppercase">
                                Everything You Need to Know About Tallow Skin Care
                            </h1>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, nulla! Nulla natus enim eum,
                                id voluptate porro similique non amet dolores libero maxime veniam aliquid ipsam? Vitae
                                aspernatur inventore optio.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-3">
                        <div class="faq-item">
                            <input type="radio" id="fq1" name="faq" class="faq-radio" value="fq1">
                            <label for="fq1" class="faq-label">
                                <div class="d-flex justify-content-between">

                                    <h5 class="fw-bold text-white text-uppercase text-sm">What is tallow and how is it made?</h5>
                                    {{-- <span><i class="bi bi-plus"></i></span> --}}
                                </div>
                            </label>

                            <p class="text-white faq-answer">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam,
                                nulla! Nulla natus enim eum, id voluptate porro similique non amet dolores libero maxime
                                veniam aliquid ipsam? Vitae aspernatur inventore optio.
                            </p>
                        </div>
                        <div class="faq-item">
                            <input type="radio" id="fq2" name="faq" class="faq-radio" value="fq1">
                            <label for="fq2" class="faq-label">
                                <div class="d-flex justify-content-between">

                                    <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">Is tallow safe to use on the skin?</h5>
                                    {{-- <span><i class="bi bi-plus"></i></span> --}}
                                </div>
                            </label>

                            <p class="text-white faq-answer">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam,
                                nulla! Nulla natus enim eum, id voluptate porro similique non amet dolores libero maxime
                                veniam aliquid ipsam? Vitae aspernatur inventore optio.
                            </p>
                        </div>
                        <div class="faq-item">
                            <input type="radio" id="fq3" name="faq" class="faq-radio" value="fq1">
                            <label for="fq3" class="faq-label">
                                <div class="d-flex justify-content-between">

                                    <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">Why use tallow instead of plant-based oils?</h5>
                                    {{-- <span><i class="bi bi-plus"></i></span> --}}
                                </div>
                            </label>

                            <p class="text-white faq-answer">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam,
                                nulla! Nulla natus enim eum, id voluptate porro similique non amet dolores libero maxime
                                veniam aliquid ipsam? Vitae aspernatur inventore optio.
                            </p>
                        </div>
                        <div class="faq-item">
                            <input type="radio" id="fq4" name="faq" class="faq-radio" value="fq1">
                            <label for="fq4" class="faq-label">
                                <div class="d-flex justify-content-between">

                                    <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">Does tallow smell bad?</h5>
                                    {{-- <span><i class="bi bi-plus"></i></span> --}}
                                </div>
                            </label>

                            <p class="text-white faq-answer">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam,
                                nulla! Nulla natus enim eum, id voluptate porro similique non amet dolores libero maxime
                                veniam aliquid ipsam? Vitae aspernatur inventore optio.
                            </p>
                        </div>
                        <div class="faq-item">
                            <input type="radio" id="fq5" name="faq" class="faq-radio" value="fq1">
                            <label for="fq5" class="faq-label">
                                <div class="d-flex justify-content-between">

                                    <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">What are the benefits of tallow for skincare?</h5>
                                    {{-- <span><i class="bi bi-plus"></i></span> --}}
                                </div>
                            </label>

                            <p class="text-white faq-answer">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam,
                                nulla! Nulla natus enim eum, id voluptate porro similique non amet dolores libero maxime
                                veniam aliquid ipsam? Vitae aspernatur inventore optio.
                            </p>
                        </div>
                        <div class="faq-item">
                            <input type="radio" id="fq6" name="faq" class="faq-radio" value="fq1">
                            <label for="fq6" class="faq-label">
                                <div class="d-flex justify-content-between">

                                    <h5 class="fw-bold text-white text-uppercase text-sm text-uppercase">Is tallow good for eczema, psoriasis, or dry skin?</h5>
                                    {{-- <span><i class="bi bi-plus"></i></span> --}}
                                </div>
                            </label>

                            <p class="text-white faq-answer">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam,
                                nulla! Nulla natus enim eum, id voluptate porro similique non amet dolores libero maxime
                                veniam aliquid ipsam? Vitae aspernatur inventore optio.
                            </p>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
        {{--  --}}
        {{-- a word from owner --}}
        <section class="br-1-bg medium-section">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="d-flex align-items-center justify-content-center mid-item">
                            <div>
                                <h1 class="tt-text-hero-md text-uppercase">
                                    {{ __('a word from our founder') }}
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolores illo
                                    reprehenderit molestias voluptatem dignissimos possimus distinctio at dolor. Optio omnis
                                    assumenda voluptatibus officiis magnam odio laboriosam quibusdam reiciendis voluptatem!
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, aperiam deleniti aliquid
                                    ipsa itaque consectetur adipisci ducimus, architecto assumenda nemo, fugiat tempora sit
                                    molestias libero delectus odio magni in fuga.

                                </p>
                                <div>
                                    <h6>
                                        John Doe
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
        </section>
        <section>
            <div class="marquee">
    <div class="marquee-content">
       <div class="">
        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt nemo dignissimos ipsam ipsum excepturi, consequatur molestias adipisci? Voluptas distinctio voluptatem qui iure. Ipsa possimus odit quod ratione reprehenderit qui non?</span>
       </div>
    </div>
</div>
        </section>
        {{-- end a word from founder --}}
       <footer class="pt-5 text-white">
    <div class="container">
        <div class="row">

            <!-- Company -->
            <div class="col-6 col-md-3 mb-4">
                <h5 class="text-white">Company</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/" class="nav-link p-0 text-white">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/features" class="nav-link p-0 text-white">Features</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/pricing" class="nav-link p-0 text-white">Pricing</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/faq" class="nav-link p-0 text-white">FAQs</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/about" class="nav-link p-0 text-white">About</a>
                    </li>
                </ul>
            </div>

            <!-- Resources -->
            <div class="col-6 col-md-3 mb-4">
                <h5 class="text-white">Resources</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/blog" class="nav-link p-0 text-white">Blog</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/support" class="nav-link p-0 text-white">Support</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/contact" class="nav-link p-0 text-white">Contact</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/privacy" class="nav-link p-0 text-white">Privacy Policy</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/terms" class="nav-link p-0 text-white">Terms & Conditions</a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-6 col-md-3 mb-4">
                <h5 class="text-white">Services</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/web-design" class="nav-link p-0 text-white">Web Design</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/development" class="nav-link p-0 text-white">Development</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/marketing" class="nav-link p-0 text-white">Marketing</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/seo" class="nav-link p-0 text-white">SEO</a>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-md-3 mb-4">
                <form onsubmit="event.preventDefault(); alert('Subscribed!');">
                    <h5 class="text-white">{{ __('Subscribe to our newsletter') }}</h5>
                    <p class="text-white">Get monthly updates and news.</p>

                    <div class="">
                        <label for="newsletterEmail" class="visually-hidden">
                            Email address
                        </label>
                        <input id="newsletterEmail"
                               type="email"
                               class="form-control mb-3"
                               placeholder="Email address"
                               required>
                        <button class="btn btn-light w-100 rounded-0">
                            {{__('Subscribe')}}
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
            <p class="mb-2 mb-sm-0">
                © {{ date('Y') }} YourCompany. All rights reserved.
            </p>

            <ul class="list-unstyled d-flex mb-0">
                <li class="ms-3">
                    <a class="text-white" href="#" aria-label="Instagram">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-white" href="#" aria-label="Facebook">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
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
