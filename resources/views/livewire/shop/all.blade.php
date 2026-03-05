<div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-2">
                <h6 class="text-uppercase mb-5">{{ __('Categories') }}</h6>
                <div>
                  <ul class="category-list">
                     @foreach ($categories as $item)
                    <li class="text-capitalize">{{ $item->category_name }}</li>
                   @endforeach
                  </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div>
                    <div class="mb-5">
                       <div class="d-flex justify-content-between">
                             <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">{{__('Product')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tallow Balm</li>
                            </ol>
                        </nav>
                        <div>
                            <h6 class="text-dark">Show 1/1</h6>
                        </div>
                       </div>
                    </div>
                    <div>
                        <div class="row">
                           @foreach ($products as $item)
                                <div class="col-lg-4">
                               <div>
                                <div class="th-md">
                                     <img src="{{asset('uploads/products/'.$item->media->first()->file_path)}}" alt="" class="">
                                </div>
                                   <div class="mt-3">
                                       <h6 class="text-center theme-color fw-bold text-uppercase">{{ $item->title }}</h6>
                                     <h6 class="text-center">€{{ number_format($item->discounted_price, 2, ',', '.') }}</h6>
                                     <a href="{{  route('shop.product.show', $item->slug) }}" class="tt_btn_theme w-100">
                                        {{__('Add cart')}}
                                     </a>
                                   </div>
                               </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
