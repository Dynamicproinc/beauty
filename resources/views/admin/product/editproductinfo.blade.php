@extends('admin.layout')
@section('title', 'Edit Product Information')
@section('content')
<div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
            <div>
                <div class="mb-3">
                    <button onclick="history.back()" class="btn btn-default"><i class="bi bi-arrow-left-short"></i> {{__('Back')}}</button>
                </div>
                <div class="panel bg-white rounded p-3 mb-3">
                    <h5>{{ __('Edit product information')}}</h5>
                    <div>
                        <form method="POST" action="{{route('admin.products.edit.infoedit.update',$product_info->id)}}">
                            @csrf
                    <div class="form-group mb-3">
                        <label for="">{{__('Information title')}}</label>
                            <input type="text" class="form-control" value="{{ $product_info->getTitle()?->title}}" disabled readonly>
                        @error('info_title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        
                    </div>
                    <div class="form-group" >
                        <textarea id="editor2" name="info_content">{{ $product_info->content}}</textarea>
                        @error('info_content')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <script>
            const editor = CKEDITOR.replace('editor2');
           
        </script>
                    </div>
                    <div class="d-flex flex-row-reverse">
                                <button class="btn btn-sm btn-success">
                                    <span class="spinner-border spinner-border-sm" role="status" wire:loading
                                        wire:target="addProductInformation" aria-hidden="true"></span>
                                {{__('Save changes')}}
                                </button>
                                <button class="btn btn-sm btn-default" 
                                    type="button">{{__('Cancel')}}</button>
                            </div>
                </form>
                        @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
                    </div>
                </div>
            </div>
      </div>
    </div>
</div>

@endsection