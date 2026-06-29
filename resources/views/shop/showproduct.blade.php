@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', $product->title)


@section('content')
    <div style="height:120px" class="d-none d-sm-block"></div>
    <div style="height:10px" class="d-block d-sm-none"></div>
    <div class="mt-3">

        <div class="container panel-pri mb-3">
            <div>
                <div>
                    {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Scotch Beef Sirloin Steak Special Trim
                            Twin
                            Pack</li>
                    </ol>
                </nav> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="sticky-top-12">

                        <div class="cars mb-3">
                            <div id="cindex" class="carousel slide">
                                <div class="carousel-indicators">
                                    @foreach ($product->media as $key => $image)
                                        <button type="button" data-bs-target="#cindex"
                                            data-bs-slide-to="{{ $key }}"
                                            class="@if ($key == 0) active @endif" aria-current="true"
                                            aria-label="Slide {{ $key }}"></button>
                                    @endforeach

                                </div>
                                <div class="carousel-inner">
                                    @foreach ($product->media as $key => $image)
                                        <div class="carousel-item @if ($key == 0) active @endif"
                                            style="height: 400px; width: 100%;">
                                            {{-- <img src="{{ asset('media/images/sample.png') }}" class="d-block w-100" alt="image"> --}}
                                            {{-- <img src="{{ asset('uploads/products/'.$image->file_path) }}" class="d-block w-100" alt="image"> --}}
                                            <img src="{{ asset('uploads/products/' . $image->file_path) }}"
                                                style="object-fit: cover; width: 100%; height: 100%;" alt="image">
                                        </div>
                                    @endforeach

                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#cindex"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#cindex"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div>
                                <div class="d-flex flex-row-wrap mt-2 p-3">
                                    @foreach ($product->media as $key => $image)
                                        <div class="img-thumb-cr">
                                            <img src="{{ asset('uploads/products/' . $image->file_path) }}" class="img-fluid"
                                                alt="" data-bs-target="#cindex"
                                                data-bs-slide-to="{{ $key }}"
                                                class="@if ($key == 0) active @endif" aria-current="true"
                                                aria-label="Slide {{ $key }}">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="px-3">
                        <div class="main-title">
                            <div class="mb-4">
                                <h3 class="title-2 text-muted text-uppercase d-none d-sm-block">
                                    {{ $product->getCategory()->category_name }}</h3>
                                <h1 class="tt-text-hero-md text-uppercase fw-bolder">{{ $product->title }}</h1>
                                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia porro ipsa eos in reiciendis, rerum, aperiam nobis cumque quibusdam quisquam, iste consectetur. Aspernatur assumenda pariatur saepe blanditiis doloremque, eligendi eius.</p> --}}
                            </div>
                            <div class="mb-3">
                                {{-- <ol>
                                <li>✓ Delivered fresh</li>
                                <li>✓ Suitable for freezing</li>
                                <li>✓ Made fresh on site in Linlithgow</li>
                                <li>✓ Excellent flavour</li>
                            </ol> --}}
                                <div class="row mb-3">
                                    @if ($product->getHighlight()->count() > 0)
                                        @foreach ($product->getHighlight() as $highlight)
                                            <div class="col-lg-6 mb-1">
                                                <div class="d-flex">
                                                    <div class="mid-ico me-2" style="font-size:14px">
                                                        {{-- <i class="bi bi-check2"></i> --}}
                                                        {{-- <img src="{{ asset('media/svg/icon1.svg') }}" alt=""
                                                        class="b-icon-sm"> --}}
                                                        {{-- <i class="bi bi-leaf"></i>  --}}
                                                        {{-- <img src="{{asset('media/svg/green-check.svg')}}" alt=""> --}}
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                    <div style="font-size: 14px"> {{ $highlight->highlight_text }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>


                            </div>
                            {{--  --}}
                            {{-- @livewire('shop.product.addcart',['product' => $product]) --}}
                            <livewire:shop.product.addcart :product="$product" />
                            <div class="small-note-areas mb-3">
                                <p class="small-note">{{ __('delivery.note') }}</p>
                            </div>
                            <div class="d-flex flex-wrap mb-4">
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/visa-alt.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/mastercard.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/american-express.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/jcb.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/discover.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/diners.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/unionpay.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/apple-pay.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                                <div class="text-center  me-2 mb-2">
                                    <img src="{{ asset('media/payment_icons/google-pay-alt.svg') }}" alt=""
                                        class="payment-icon">
                                </div>
                            </div>
                            {{--  --}}


                            <div>
                                <div class=" mb-3">
                                    <span class="accord-label-title mb-3">{{ __('Description') }}</span>
                                    <div class="pro-description">

                                        {!! $product->description !!}
                                    </div>
                                    <div>

                                    </div>
                                </div>
                                <div class="product-infomation accd mb-3">
                                    @if (count($product->getProductInformation()) > 0)
                                        @foreach ($product->getProductInformation() as $item)
                                            <div class="accord-cont">
                                                <input type="checkbox" id="chkb{{ $item->id }}" name="page_info"
                                                    class="accdcheck" value="chkb{{ $item->id }}">
                                                <label for="chkb{{ $item->id }}"
                                                    class="accord-label text-uppercase">{{ __($item->gettitle()->title) }}</label>
                                                <section class="accord-show pro-description">
                                                    {!! $item->content !!}
                                                </section>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                @if (count($product->getSimilarProducts()) > 0)
                                    {{-- <div class=" mb-3">
                                    <span class="accord-label-title mb-3">{{__('Similar Products')}}</span>
                                    <div class="main-carousel-2">
                                       
                                        @foreach ($product->getSimilarProducts() as $similar_product)
                                            <div class="carousel-cell similar-card similar-product">
                                                <a href="{{  route('shop.product.show', $similar_product->slug) }}">
                                                    <div class="similar-card-body">
                                                        <div class="">
                                                            <img src="{{ asset('uploads/products/'.$similar_product->media->first()?->file_path) }}" alt="">
                                                        </div>
                                                        <div class="">
                                                           
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                       
                                    </div>

                                </div> --}}
                                <div class="main-carousel-2">

                                    @foreach ($product->getSimilarProducts() as $similar_product)
                                        <div class="similar-card-wrap text-center carousel-cell">
                                             <a href="{{  route('shop.product.show', $similar_product->slug) }}">
                                            <div class="similar-card mb-2">
                                                <img src="{{ asset('uploads/products/' . $similar_product->media->first()?->file_path) }}"
                                                    alt="">
                                            </div>
                                            <h6 class="lh-2 small mb-0" style="font-size: 12px">{{ $product->title}}</h6>
                                            <strong class="small">€{{ number_format($product->discounted_price, 2, ',', '.') }}</strong>
                                             </a>
                                        </div>
                                    @endforeach
                                </div>
                                @endif






                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="mid-menu text-white d-flex justify-content-center mb-3">
        <div class="">Description</div>
        <div class=""></i>Nutrition guide</div>
        <div class=""></i>How to Cook</div>
        <div class="">Packaging</div>
    </div> --}}

    </div>
    <script>
        var elem = document.querySelector('.main-carousel');
        var flkty = new Flickity(elem, {
            // options
            cellAlign: 'left',
            contain: true,
            freeScroll: true,

            // disable previous & next buttons and dots

            pageDots: false
        });

        var el2 = document.querySelector('.main-carousel-2');
        var fl2 = new Flickity(el2, {
            // options
            cellAlign: 'left',
            contain: true,
            freeScroll: true,

            // disable previous & next buttons and dots

            pageDots: false
        });
        var el3 = document.querySelector('.main-carousel-3');
        var fl3 = new Flickity(el3, {
            // options
            cellAlign: 'left',
            contain: true,
            freeScroll: true,

            // disable previous & next buttons and dots

            pageDots: false
        });

        // element argument can be a selector string
        //   for an individual element
        var flkty = new Flickity('.main-carousel', {
            // options
        });
        var fl2 = new Flickity('.main-carousel-2', {
            // options
        });
        var fl3 = new Flickity('.main-carousel-3', {
            // options
        });
    </script>
@endsection
