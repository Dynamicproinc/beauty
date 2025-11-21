@extends('admin.layout')
@section('title', 'Add Product')
@section('content')
<div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
    @livewire('admin.product.add')
      </div>
    </div>
</div>

@endsection