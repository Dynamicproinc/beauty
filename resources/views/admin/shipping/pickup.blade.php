@extends('admin.layout')
@section('title', __('Pickup Location'))
@section('content')
<div>
    <div class="">
      <div class="">
       @livewire('admin.pickup')
      </div>
    </div>
</div>

@endsection
