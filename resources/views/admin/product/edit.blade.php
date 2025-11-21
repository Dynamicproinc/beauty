@extends('admin.layout')
@section('title', 'Edit Product')
@section('content')
<div>
   <div class="row justify-content-center">
      <div class="col-lg-12">
         @livewire('admin.product.edit', ['id' => $id])

      </div>
   </div>
</div>

@endsection