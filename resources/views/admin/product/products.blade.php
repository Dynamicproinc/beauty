@extends('admin.layout')
@section('title', 'Inventory')
@section('content')
   <div class="">
    <div class="d-flex justify-content-between mb-3">
        <div class="p-2"><h5>{{__('Products')}}</h5></div>
        <div class="d-flex d-flex-reverse">
            
            <a href="{{ route('admin.products.add') }}" class="btn btn-dark btn-2">{{__('Add Product')}}</a>
        </div>
    </div>
        <div class="panel bg-white rounded">
          @if(count($products))
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">
        <input type="checkbox" id="select-all">
      </th>
      <th scope="col">{{__('Image')}}</th>
      <th scope="col">{{__('Title')}}</th>
      <th scope="col">{{__('Category')}}</th>
      {{-- <th scope="col">{{__('Supplier')}}</th> --}}
      <th scope="col">{{__('Quantity')}}</th>
      <th scope="col">{{__('Status')}}</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr style="height:70px">
      <th scope="row">
        <input type="checkbox" class="select-item" data-id="{{ $product->id }}">
      </th>
      <td><img src="{{ $product->getImage()?->file_path ?? asset('media/images/no_image.jpg') }}" width="50"></td>
      <td class="text-truncate" style="max-width: 150px;">
        <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}">
          {{ $product->title }}
        </a>
      </td>
      <td>{{ $product->getCategory()?->category_name }}</td>
      {{-- <td>{{ $product->getSupplier()?->supplier_name }}</td> --}}
      <td>{{ $product->quantity }}</td>
      <td>
        @if($product->status == 'draft')
        <span class="badge badge-pill badge-light text-bg-light"> {{ $product->status }}</span>
        @endif
        @if($product->status == 'active')
        <span class="badge badge-pill badge-success text-bg-success"> {{ $product->status }}</span>
        @endif
       
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
   <div class="p-2">{{__('No products found')}}</div>
@endif

        </div>
   </div>
@endsection
