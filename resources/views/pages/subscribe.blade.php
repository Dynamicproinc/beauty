@extends('layouts.app')
@section('title', __('Subscribe for newsletters'))
@section('content')
<style>
    .background-image {
    background-size: cover;
    background-position: center;
    position: relative;
    width: 100%;
    background-image: url('{{ asset('media/images/grass-blur.jpg') }}');
    background-repeat: no-repeat;
     background-attachment: fixed;
     height:100vh;
}
</style>
<div class="background-image" style="">
    <div class="container">
    <div style="height: 100px"></div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
             @livewire('shop.esubscription')
        </div>
    </div>
</div>
</div>
@endsection
