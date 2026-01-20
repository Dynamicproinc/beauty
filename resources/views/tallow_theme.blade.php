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
                                    <span>150,000+ satisfied customers</span>
                                </div>

                                <div class="tt-text-hero-md text-uppercase">
                                    <p class="mb-0">Skincare without compromise:</p>
                                    <p>Natural. Minimalist. Effective.</p>
                                </div>

                                <p class="sec_text_p_md fw-bold">
                                    Featured on "Dragon's Den"🦁: Natural skincare with powerful lipids, free from
                                    artificial additives.
                                </p>

                                <button class="tt_btn">Secure the deal</button>

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
                                    Which skin type best describes your skin?
                                </h1>
                                <p class="sec_text_p_md">
                                    Not sure which product is right for you?
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
                                        <img src="https://www.tallows.de/cdn/shop/collections/ChatGPT_Image_24._Sept._2025_11_16_28.png?v=1758705428&width=600">
                                        
                                        <h6 class="sm-card-text">

                                            DAMMAGED SKIN
                                        </h6>
                                    </div>
                                </div>



                                <div class="carousel-cell">
                                    
                                    <div class=" mb-3 cr-cont">
                                        <img src="https://www.tallows.de/cdn/shop/collections/Dry_Skin.png?v=1758704976&width=600">
                                        
                                        <h6 class="sm-card-text">

                                           DRY SKIN
                                        </h6>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="https://www.tallows.de/cdn/shop/collections/Sensitive_Skin_2.png?v=1758705016&width=600">
                                       
                                        <h6 class="sm-card-text">

                                            SENSITIVE SKINS
                                        </h6>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="https://www.tallows.de/cdn/shop/collections/Sensitive_Skin_2.png?v=1758705016&width=600">
                                       
                                        <h6 class="sm-card-text">

                                            SENSITIVE SKINS
                                        </h6>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="https://www.tallows.de/cdn/shop/collections/Sensitive_Skin_2.png?v=1758705016&width=600">
                                       
                                        <h6 class="sm-card-text">

                                            SENSITIVE SKINS
                                        </h6>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class=" mb-3 cr-cont">
                                        <img src="https://www.tallows.de/cdn/shop/collections/Sensitive_Skin_2.png?v=1758705016&width=600">
                                       
                                        <h6 class="sm-card-text">

                                            SENSITIVE SKINS
                                        </h6>
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
            <div class="banner tb-p">
               <div class="container">
                 <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="tt-text-hero-md text-uppercase text-center text-sm-start">
                            Available at Rossmann in Germany
                        </h1>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="text-center text-sm-end">
                            <img src="https://www.tallows.de/cdn/shop/files/Rossmann_Logo.svg_1.png?v=1758195086&width=1000" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </section>
        <section>
            <div class="tb-p bg-white">
                <div class="container">
                    <div class="d-flex justify-content-center mb-5">
                    <h1 class="tt-text-hero-md text-uppercase">{{__('nature meets science')}}</h1>
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
                                   Reduktion des transepidermalen Wasserverlustes (Haut-Feuchtigkeitsverlust) um bis zu 63%*
                                </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center text-center">
                    <small class="text-muted text-uppercase tt-text-xs lh-1">* Independent clinical 4-week study with 31 female participants (2025). Barrier Repair Pur applied once daily.</small>
                </div>
                </div>
            </div>
        </section>

    </div>
    <script>
        var el2 = document.querySelector('.main-carousel-2');
        var fl2 = new Flickity(el2, {
            // options
            cellAlign: 'left',
            contain: true,
            freeScroll: true,

            // disable previous & next buttons and dots

            pageDots: false
        });
    </script>
@endsection
