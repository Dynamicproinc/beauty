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
.gsi-material-button {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -webkit-appearance: none;
  background-color: WHITE;
  background-image: none;
  border: 1px solid #747775;
  -webkit-border-radius: 20px;
  border-radius: 20px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  color: #1f1f1f;
  cursor: pointer;
  font-family: 'Roboto', arial, sans-serif;
  font-size: 14px;
  height: 40px;
  letter-spacing: 0.25px;
  outline: none;
  overflow: hidden;
  padding: 0 12px;
  position: relative;
  text-align: center;
  -webkit-transition: background-color .218s, border-color .218s, box-shadow .218s;
  transition: background-color .218s, border-color .218s, box-shadow .218s;
  vertical-align: middle;
  white-space: nowrap;
  width: auto;
  max-width: 400px;
  min-width: min-content;
}

.gsi-material-button .gsi-material-button-icon {
  height: 20px;
  margin-right: 10px;
  min-width: 20px;
  width: 20px;
}

.gsi-material-button .gsi-material-button-content-wrapper {
  -webkit-align-items: center;
  align-items: center;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  flex-wrap: nowrap;
  height: 100%;
  justify-content: space-between;
  position: relative;
  width: 100%;
}

.gsi-material-button .gsi-material-button-contents {
  -webkit-flex-grow: 1;
  flex-grow: 1;
  font-family: 'Roboto', arial, sans-serif;
  font-weight: 500;
  overflow: hidden;
  text-overflow: ellipsis;
  vertical-align: top;
}

.gsi-material-button .gsi-material-button-state {
  -webkit-transition: opacity .218s;
  transition: opacity .218s;
  bottom: 0;
  left: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.gsi-material-button:disabled {
  cursor: default;
  background-color: #ffffff61;
  border-color: #1f1f1f1f;
}

.gsi-material-button:disabled .gsi-material-button-contents {
  opacity: 38%;
}

.gsi-material-button:disabled .gsi-material-button-icon {
  opacity: 38%;
}

.gsi-material-button:not(:disabled):active .gsi-material-button-state, 
.gsi-material-button:not(:disabled):focus .gsi-material-button-state {
  background-color: #303030;
  opacity: 12%;
}

.gsi-material-button:not(:disabled):hover {
  -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
  box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
}

.gsi-material-button:not(:disabled):hover .gsi-material-button-state {
  background-color: #303030;
  opacity: 8%;
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
