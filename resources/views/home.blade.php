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
                    <div class="me-3 line-active">{{__('Personal information')}}</div>
                    <div class="me-3">{{__('Order history')}}</div>
                    <div class="me-3">{{__('Setting')}}</div>
                </div>
            </div>
            <div>
                @livewire('account.address')
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
