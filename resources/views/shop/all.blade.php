@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', 'All Products - ')
@section('content')
<div class="mb-4">
    <div style="height: 150px"></div>
   @livewire('shop.all')
  
</div>
@endsection
