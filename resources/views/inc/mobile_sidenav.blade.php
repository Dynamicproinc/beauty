<div class="mobile-sidenavbar" id="side_nav_bar">
    <div class="ms-wrap">

        <div class="bg-light p-3">
            <div class="mb-3 d-flex justify-content-between align-items-center" style="height:35px">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('media/images/logo.png') }}" alt="" class="logo-md">
                    <span class="logo-text fw-bold">Tallow Skincare</span>
                </div>
                <button class="btn btn-default" onclick="closeSB()"><i class="bi bi-x-lg"></i></button>
            </div>
        </div>
        <div class="p-3">

            <div class="mb-5">
                <ul class="sn-menu">
                    <li>
                        <a href="{{ route('welcome') }}">{{ _('Home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.product.all') }}">{{ _('All Products') }}</a>
                    </li>
                    <li>
                        <a href="/#faq">{{ __('FAQ') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">{{ _('My Account') }}</a>

                    </li>
                    <li>
                        <a href="{{ route('shop.contact') }}">{{ _('Contact Us') }}</a>

                    </li>
                    <li>
                        <a href="{{ route('shop.subscribe') }}"> {{ _('Subscribe to Newsletters') }}</a>

                    </li>
                </ul>
            </div>
            <div>
                <div class="">
                    <span class="small">{{ __('Select language') }}</span>
                    <div class="d-flex">
                        <div class="me-2">
                            <a href="/language/en" class="{{ app()->getLocale() == 'en' ? 'tt_btn_theme-sm' : '' }}">
                                EN
                            </a>
                        </div>

                        <div class="me-2">
                            <a href="/language/hr" class="{{ app()->getLocale() == 'hr' ? 'tt_btn_theme-sm' : '' }}">
                                HR
                            </a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="sn-footer bg-light bg-light p-3">
            <div class="mb-3">

                <h6 class="text-black">
                    {{ __('If you already created an account, please log in to access your dashboard.') }}</h6>

                <button class="tt_btn_theme">{{ __('Login') }} </button>
            </div>
            <hr />
            <h6 class="mb-0">Tallow skin care j.d.o.o.</h6>
            <small>
                Donja Švarča 79c, Karlovac, Karlovačka, 47000, Croatia
                <br>
                info@tallow-skincare.hr


            </small>


        </div>
    </div>
</div>
