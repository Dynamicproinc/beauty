@extends('admin.layout')
@section('title', 'Stock Entries')
@section('content')
<div>
    <div class="row justify-content-center mb-4">
      <div class="col-lg-10">
    @livewire('admin.inventory.stock-entries')
      </div>
    </div>
</div>

@endsection