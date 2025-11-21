<nav class="position-0 fixed-top ">
    <div class="prm-bar text-white p-1 text-center"><small>{{ __('We ship 1-3 days in Croatia for free over 100 ')}}</small></div>
    
      <header class="lh-1 py-3 " id="header">
               <div class="container">
                 <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <div class="navbar-links">
                            <a class="link-secondary" href="#">{{__('Home')}}</a>
                        <a class="link-secondary" href="#">{{__('Products')}}</a>
                        <a class="link-secondary" href="#">{{__('About us')}}</a>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                            <img src="{{asset('media/images/logo.png')}}" alt="" class="logo-md">
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                       
                        
                    </div>
                </div>
               </div>
            </header>
    @include('inc.sidenav')
    {{--  --}}
</nav>