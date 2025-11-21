@extends('admin.layout')
@section('title', 'Add Stock')
@section('content')
<div>
    <div class="row justify-content-center mb-4">
      <div class="col-lg-10">
    @livewire('admin.inventory.add-stock')
      </div>
    </div>
</div>

@endsection