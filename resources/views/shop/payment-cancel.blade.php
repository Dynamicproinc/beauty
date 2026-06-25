@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', __('Payment Cancelled'))
@section('meta')
   
@endsection
@section('content')
    <div class="container">
        <div style="height:100px"></div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                {{-- payment canceled notice --}}
               <div class="p-3 text-center">
                 <div class="alert alert-warning" role="alert">
                    {{ __('Your payment has been cancelled.') }}
                </div>
                    <div>
                        <a href="/" class="btn btn-link">{{ __('Return to Shop') }}</a>
                    </div>
               </div>

            </div>
        </div>
    </div>

@endsection
