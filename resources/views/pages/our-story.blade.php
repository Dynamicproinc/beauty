@extends('layouts.app')
@section('title', __('Our Story'))
@section('content')
    <div>
        <div class="big-picture">
            <img src="{{ asset('media/images/our-story.png') }}" alt="{{ __('Our story') }}">
            <div class="big-picture-content">
                <div class="text-center">
                    <img src="{{ asset('media/images/logo.png') }}" alt="Tallow Skin Care" style="width: 64px; height:auto">
                    <div class="tt-text-xs text-uppercase mb-2 mt-3">
                        <span>{{ __('Our Story') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
