<div class="mobile-sidenavbar" id="side_nav_bar">
    <div class="ms-wrap">

        <div class="bg-light p-3">
            <div class="mb-3 d-flex justify-content-between align-items-center" style="height:35px">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('media/images/logo.png') }}" alt="" class="logo-md">
                    <span class="logo-text">Tallow Skincare</span>
                </div>
                <button class="btn btn-default" onclick="closeSB()"><i class="bi bi-x-lg"></i></button>
            </div>
        </div>
        <div class="p-3">

            <div class="mb-5">
                <ul class="sn-menu">
                    <li>
                        {{ _('Home') }}
                    </li>
                    <li>
                        {{ _('All Products') }}
                    </li>
                    <li>
                        {{ _('FAQ') }}
                    </li>
                    <li>
                        {{ _('My Account') }}
                    </li>
                    <li>
                        {{ _('Contact us') }}
                    </li>
                </ul>
            </div>
            <div>
                <div class="">
                    <span class="small">{{__('Select language')}}</span>
                    <div class="d-flex">
                        <div class="me-2"><a href="#" class="tt_btn_theme-sm">EN</a></div>
                        <div class="me-2"><a href="#" >HR</a></div>
            </div>
                    
                </div>
            </div>
           

        </div>
        <div class="sn-footer bg-light bg-light p-3">
             <div class="mb-3">
                
                    <h6 class="text-black">{{ __('If you already created an account, please log in to access your dashboard.') }}</h6>
                
                <button class="tt_btn_theme">{{ __('Login') }} </button>
            </div>
            <hr/>
            <h6 class="mb-0">Tallow skin care j.d.o.o.</h6>
            <small>
                Donja Švarča 79c, Karlovac, Karlovačka, 47000, Croatia
                <br>
                info@tallow-skincare.hr
                
                
            </small>
            

        </div>
    </div>
</div>
