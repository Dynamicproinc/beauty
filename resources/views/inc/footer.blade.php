 <footer class="pt-5 text-white">
    <div class="container">
        <div class="row">

             <!-- Newsletter -->
            <div class="col-md-4 mb-4">
                <form onsubmit="event.preventDefault(); alert('Subscribed!');">
                    <h5 class="text-white">{{ __('About Tallow Skincare') }}</h5>
                    <p class="text-white">{{ __('Tallow skincare is a premium, natural skincare line made from 100% pure beef tallow. It is rich in vitamins A, D, E, and K and is designed to nourish and protect your skin.') }}</p>

                    <h6 class="fw-bold">{{ __('Subscribe to our newsletter') }}</h6>
                    <div class="">
                        <label for="newsletterEmail" class="visually-hidden">
                            Email address
                        </label>
                        <input id="newsletterEmail"
                               type="email"
                               class="form-control mb-3"
                               placeholder="Email address"
                               required>
                        <button class="btn btn-light w-100 rounded-0">
                            {{__('Subscribe')}}
                        </button>
                    </div>
                </form>
            </div>
            <!-- Company -->
            

            <!-- Resources -->
            <div class="col-6 col-md-3">
                <div class="position-relative">
                   <div>
                     <h6 class="text-white">{{__('Quick Links')}}</h6>
                <ul class="nav flex-column">
                   
                    <li class="nav-item mb-2">
                        <a href="/" class="nav-link p-0 text-white">{{__('Home')}}</a>
                    </li>
                    
                    <li class="nav-item mb-2">
                        <a href="/privacy-statement" class="nav-link p-0 text-white">{{__('Privacy Policy')}}</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/terms-and-conditions" class="nav-link p-0 text-white">{{__('Terms & Conditions')}}</a>
                    </li>
                     <li class="nav-item mb-2">
                        <a href="/#faq" class="nav-link p-0 text-white">{{__('FAQs')}}</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/contact" class="nav-link p-0 text-white">{{__('Contact')}}</a>
                    </li>
                    
                </ul>
                   </div>
                </div>
            </div>

            <!-- Services -->
          
             <div class="col-6 col-md-3">
                <div>
                      <strong>Tallow Skincare j.d.o.o.</strong><br>
            Donja Švarča 79c<br>
            47000 Karlovac, Croatia.<br>
           <i class="bi bi-envelope-at-fill"></i> info@tallow-skincare.hr<br>
            <i class="bi bi-telephone-fill"></i> 0996680498


                </div>
             </div>
           

        </div>

        <!-- Bottom Bar -->
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
            <small class="mb-2 mb-sm-0">
                © {{ date('Y') }} Tallow skincare j.d.o.o. All rights reserved.
            </small>

            <ul class="list-unstyled d-flex mb-0">
                <li class="ms-3">
                    <a class="text-white" href="#" aria-label="Instagram">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-white" href="#" aria-label="Facebook">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>