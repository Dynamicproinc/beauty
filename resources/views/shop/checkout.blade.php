{{-- @extends('layouts.app')

@section('title', 'Checkout')
    

@section('content')
@endsection --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{__('Checkout') }}</title>

    <!-- Bootstrap 5.3 CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* Small helpers to match the example */
        body {
            background: #F0F0F0 !important;
        }

        .pricing-header {
            max-width: 700px;
        }

        .card-pricing {
            border: 1px solid rgba(0, 0, 0, .125);
        }

        .feature-list {
            list-style: none;
            padding-left: 0;
        }

        .feature-list li::before {
            content: "✓ ";
            color: currentColor;
        }

        /* Simple footer spacing */
        footer .list-unstyled li a {
            text-decoration: none;
        }

        label {
            font-size: 0.9rem;
            color: #232323 !important;
        }

        .accord-area {
            background: #F8F8F8;
            /* overflow: hidden; */
            border-radius: 16px;
        }

        .accord-item {
            /* border-bottom: 1px solid #E0E0E0; */
        }

        .pm-check-label {
            position: relative;



        }

        .pm:checked+.pm-check-label div {
            height: 100%;
        }

        .pm-check-label {

            cursor: pointer;
            /* border: 1px solid #333; */

        }

        .accord-area {
            /* border:1px solid #0c0c0c; */
            overflow: hidden;
        }

        section {
            transition: height 0.3s ease;
            /* border-top: 1px solid #0c0c0c; */
            /* border-bottom: 1px solid #E0E0E0; */
            background: #F0F0F0;
            width: 100%;
            overflow: hidden;
            height: 0px;
        }

        .accord-item input:checked~section.acd-section {
            height: 250px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            background: #F0F0F0;
        }

        .accord-item input:checked~section.acd-section-h100 {
            height: 390px !important;

            padding: 16px;
            background: #F0F0F0;
        }

        .cart-items-list {
           max-height: 360px !important;
            overflow-x: hidden !important;
           
        }
        .mini-image{
            width: 70px;
            height: 70px;
            border-radius: 8px;
            object-fit: cover;
            border: 2px solid #fff;
        }
        .mini-image-wr{
            width: 70px;
            height: 70px;
            border-radius: 8px;
            object-fit: cover;
            border: 2px solid #fff;
        }
        .b-2-solid-w{
            border:2px solid #fff;
        }
        .d-type-radio{
            display: none;
        }
        .btn-radio{
    height: 70px;
    border-radius:8px;
    border: 1px solid #333 !important;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 16px;
    transition: .2s;
    
}
.btn-radio.active, .d-type-radio:checked + .btn-radio{
    background: #333;
    color: white !important;
    border: 1px solid #333 !important;
}

.btn-radio:hover{
    background: #333;
    color: white !important;
    cursor: pointer;
}
.payment-area{
    position: relative;
}
.sk-pl{
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .125);
    position: absolute;
    z-index: 100;
    top:0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.logo-checkout{
    width: 60px;
    height: 60px;
    object-fit: contain;
}
    </style>
    <script src="https://js.stripe.com/v3/"></script>
    
    @livewireStyles

</head>

<body>

    <header class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom container">
        <div>
            <a  href="{{ route('shop.cart') }}" class="btn btn-default"><i class="bi bi-cart h4"></i></a>
        </div>
        <div>
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="{{ asset('media/images/logo.png') }}" alt="Logo" class="mx-auto d-block logo-checkout"
                style="max-height: 80px;">
        </a>
        </div>
        <div></div>
    </header>

    <main class="container">
       @livewire('shop.checkout')

    </main>


    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
