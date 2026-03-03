@extends('layouts.app')
@section('title', __('Account'))
@section('content')
<div>
     <div style="height:100px"></div>
    <div class="container">
        <div class="row jusltify-content-center">
        <div class="col-lg-8">
            <div class="mb-5">
                <div class="d-flex">
                    <div class="me-3 @if(Route::currentRouteName() == 'home') line-active @endif"><a href="{{ route('home') }}">{{__('Address')}}</a></div>
                    <div class="me-3 @if(Route::currentRouteName() == 'account.orders') line-active @endif"><a href="{{ route('account.orders') }}">{{__('Order history')}}</a></div>
                    <div class="me-3"><a href="#">{{__('Setting')}}</a></div>
                </div>
            </div>
            <div>
               @yield('content-account')
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
