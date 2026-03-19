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
        <div style="height:100px"></div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="gift-area p-3">
                    @livewire('shop.gift-card')
                </div>
            </div>
        </div>
    </div>

@endsection
