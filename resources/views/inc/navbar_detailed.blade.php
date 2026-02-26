
@if(route('welcome') == url()->current())
   
<nav class="position-0 fixed-top ">
    {{-- <div class="prm-bar p-1 text-center"><small class="fw-bold">{{ __('We ship 1-3 days in Croatia for free over 100 ')}}</small></div> --}}
    
      <header class="lh-1 py-3 d-none d-lg-block" id="header">
               <div class="container">
                 <div class="row  justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <div class="navbar-links">
                           
                        <a class="link-secondary non-hover" href="#">{{__('Home')}}</a>
                        <a class="link-secondary non-hover" href="#">{{__('Tallow Skincare')}}</a>
                        <a class="link-secondary non-hover" href="#">{{__('contact')}}</a>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                            <img src="{{asset('media/images/logo.png')}}" alt="" class="logo-md">
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <div class="navbar-links">
                            
                            <a  href="#" class="link-secondary non-hover">
                                <i class="bi bi-person"></i>
                            </a>
                             <div>
                               @livewire('shop.cartbutton')

                            </div>
                            {{-- <a class="link-secondary" href="#">{{__('Cart')}}</a> --}}
                        </div>
                        
                    </div>
                </div>
               </div>
            </header>
            <header class="d-block d-lg-none" id="mobile_header">
                <div class="container">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <div class="navbar-links">
                            {{-- <a class="link-secondary" href="#">{{__('Home')}}</a>
                        <a class="link-secondary" href="#">{{__('Products')}}</a> --}}
                        <a class="link-secondary" href="#"><i class="bi bi-list" id="menu_icon"></i></a>
                        <a class="link-secondary" href="#"><i class="bi bi-search"></i></a>
                        
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                            <img src="{{asset('media/images/logo.png')}}" alt="" class="logo-md">
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <div class="navbar-links">
                            <a class="link-secondary" href="#"><i class="bi bi-person"></i></a>
                            <div>
                               @livewire('shop.cartbutton')

                            </div>
                           
                            {{-- <a class="link-secondary" href="#">{{__('Cart')}}</a> --}}
                        </div>
                        
                    </div>
                </div>
                </div>
            </header>
    @include('inc.sidenav')
    {{--  --}}
</nav>
@endif