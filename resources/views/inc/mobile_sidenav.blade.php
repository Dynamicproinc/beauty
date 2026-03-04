<div class="mobile-sidenavbar">
   <div class="ms-wrap">
    
   <div class="bg-light p-3 mb-3">
     <div class="mb-3 d-flex justify-content-between">
    <div class="d-flex align-items-center">
    <img src="{{ asset('media/images/logo.png') }}" alt="" class="logo-md">
    <span class="logo-text">Tallow Skincare</span>
</div>
       <button class="btn btn-default"><i class="bi bi-x-lg"></i></button>
    </div>
   </div>
   <div class="p-3">
   
   <div class="mb-5">
    <ul class="sn-menu">
        <li>
            {{_('home')}}
        </li>
        <li>
            {{_('All Products')}}
        </li>
        <li>
            {{_('Faq')}}
        </li>
    </ul>
   </div>

    <div>
        <p class="text-small">
            <small>{{__('If you have an account, please login')}}</small>
        </p>
    <button class="tt_btn_theme">{{__('Login')}} </button>
   </div>
   
   </div>
   </div>
</div>
