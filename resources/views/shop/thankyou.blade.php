@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', __('Thank You for Your Order'))
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="mb-4">Thank You for Your Order!</h1>
                <p class="lead">Your order has been successfully placed. We appreciate your business!</p>
                {{-- <a href="{{ route('shop.index') }}" class="btn btn-primary mt-3">Continue Shopping</a> --}}
            </div>
        </div>
    </div>
@endsection