@extends('layouts.app')
@section('title', __('Subscribe for newsletters'))
@section('content')
<div class="container">
    <div style="height: 100px"></div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
             @livewire('shop.esubscription')
        </div>
    </div>
</div>
@endsection
