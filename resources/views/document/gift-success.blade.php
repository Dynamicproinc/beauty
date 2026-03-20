@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', 'Success - ')

@section('content')
    <div class="container">
        <div style="height:100px"></div>
        <div class="row justify-content-center">
           <div class="col-lg-6">
                <div class="container mt-5">
    <div class="alert alert-success shadow-sm rounded-3" role="alert">
        <div class="d-flex align-items-center">
            <div class="me-3">
                <i class="bi bi-check-circle-fill fs-1 text-success"></i>
            </div>
            <div>
                <h4 class="alert-heading mb-2">{{__('Payment Successful!')}}</h4>
                <p class="mb-1">
                   {{__('Your gift card has been successfully sent')}} 🎁
                </p>
                <small class="text-muted">
                   {{__('The recipient will receive the gift card shortly via email.')}}
                </small>
            </div>
        </div>
        <hr>
        <div class="text-end">
            <a href="/" class="btn btn-success btn-sm">{{__('Go to Homepage')}}</a>
            {{-- <a href="/orders" class="btn btn-outline-success btn-sm">View Order</a> --}}
        </div>
    </div>
</div>
           </div>
        </div>
    </div>

@endsection
