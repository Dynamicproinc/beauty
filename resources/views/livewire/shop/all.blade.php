<div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-2">
                <h6 class="text-uppercase mb-5">{{ __('Categories') }}</h6>
                <div>
                  <ul>
                     @foreach ($categories as $item)
                    <li>{{ $item->category_name }}</li>
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
                            <h6 class="text-dark">Show 18/24</h6>
                        </div>
                       </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-4">
                               <div>
                                <div class="th-md">
                                     <img src="https://shopthegallowayfarm.com/cdn/shop/files/IMG_3548.jpg?v=1707002913" alt="" class="">
                                </div>
                                   <div class="mt-3">
                                       <h6 class="text-center theme-color fw-bold text-uppercase">Tallow Balm 30g</h6>
                                     <h6 class="text-center">25.00 EUR</h6>
                                     <button class="tt_btn_theme w-100">
                                        {{__('Add cart')}}
                                     </button>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
