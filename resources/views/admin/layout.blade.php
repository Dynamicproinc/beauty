<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN - @yield('title')</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
 <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
 {{-- <script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script> --}}
  {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
  @livewireStyles
  @livewireScripts
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-white bg-white shadow-sm sticky-top  flex-md-nowrap p-0">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
    </nav>
    <div class="container-fluid">
         <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse mt-5">
          <div class="sidebar-sticky">
            {{--  --}}
            <div class="" style="">
               
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            Home
                        </button>
                        <div class="collapse" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Dashboard</a></li>
                                 <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Customers</a></li>
                                {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li> --}}
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Product
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{route('admin.products')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">All product</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Food recipes</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nutrition guide</a></li>
                                {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Videos</a></li> --}}
                               
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#inventory-collapse" aria-expanded="false">
                            {{ __('Inventory') }}
                        </button>
                        <div class="collapse" id="inventory-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{route('admin.inventory.addstock')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{{ __('New Stock') }}</a></li>
                                <li><a href="{{route('admin.inventory.stockentries')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{{ __('Stock Entries') }}</a></li>
                               
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            {{__('Utilities')}}
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{{__('Food recipes')}}</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{{__('Nutrition guide')}}</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{{__('Suppliers')}}</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{{__('Categories')}}</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{{__('Attributes')}}</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            {{--  --}}
            
            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="container mt-4">
              {{-- <div class="row justify-content-center">
               <div class="col-lg-10"> --}}
                 @yield('content')
               {{-- </div>
              </div> --}}
        </div>
        </main>
      </div>
    </div>
    {{--  --}}
    
   {{-- <script>
  CKEDITOR.replace('editor');
</script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>