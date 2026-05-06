@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', 'Contact Us - ')
@section('meta')
    <meta name="description"
        content="Contact us for any inquiries, support, or feedback. We're here to assist you with your beauty needs. Reach out to us today!">
    <meta name="keywords" content="contact, support, inquiries, feedback, beauty products, customer service">
@endsection
@section('content')
<style>
.background-image {
background-size: cover;
background-position: center;
position: relative;
width: 100%;
background-image: url('{{ asset('media/images/grass-blur.jpg') }}');
background-repeat: no-repeat;
/* background-attachment: fixed; */
height:100%;
}
</style>
    <div class="background-image">
        <div class="container">
        <div style="height:100px"></div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                
                <div class="">
                    <div class="container mt-5">
                        <div class="row ">
                            <div class="">

                                @livewire('shop.contact')

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
