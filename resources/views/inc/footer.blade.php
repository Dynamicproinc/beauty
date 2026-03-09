 <footer class="pt-5 text-white">
     <div class="container">
         <div class="row">

             <!-- Newsletter -->
             <div class="col-md-4 mb-4">
                 {{-- @livewire('shop.esubscription') --}}
                 <h5 class="text-white">{{ __('Tallow Skincare') }}</h5>
                 <p class="text-white">
                     {{ __('Tallow skincare is a premium, natural skincare line made from 100% pure beef tallow. It is rich in vitamins A, D, E, and K and is designed to nourish and protect your skin.') }}
                 </p>
                 <a href="{{ route('shop.subscribe') }}" class="btn btn-light w-100 rounded-0">
                     {{ __('Subscribe') }}
                 </a>
             </div>
             <!-- Company -->


             <!-- Resources -->
             <div class="col-6 col-md-3">
                 <div class="position-relative">
                     <div>
                         <h6 class="text-white">{{ __('Quick Links') }}</h6>
                         <ul class="nav flex-column">

                             <li class="nav-item mb-2">
                                 <a href="/" class="nav-link p-0 text-white">{{ __('Home') }}</a>
                             </li>

                             <li class="nav-item mb-2">
                                 <a href="/privacy-statement"
                                     class="nav-link p-0 text-white">{{ __('Privacy Policy') }}</a>
                             </li>
                             <li class="nav-item mb-2">
                                 <a href="/terms-and-conditions"
                                     class="nav-link p-0 text-white">{{ __('Terms & Conditions') }}</a>
                             </li>
                             <li class="nav-item mb-2">
                                 <a href="/#faq" class="nav-link p-0 text-white">{{ __('FAQs') }}</a>
                             </li>
                             <li class="nav-item mb-2">
                                 <a href="/contact" class="nav-link p-0 text-white">{{ __('Contact') }}</a>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>

             <!-- Services -->

             <div class="col-6 col-md-3">
                 <div>
                     <strong>Tallow Skin Care j.d.o.o.</strong><br>
                     Donja Švarča 79c<br>
                     47000 Karlovac, Croatia.<br>
                     <small> info@tallow-skincare.hr</small><br>
                     <small> 0996680498</small>


                 </div>
             </div>


         </div>

         <!-- Bottom Bar -->
         <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
             <small class="mb-2 mb-sm-0">
                 © {{ date('Y') }} Tallow skincare j.d.o.o. All rights reserved.
             </small>

             <ul class="list-unstyled d-flex mb-0">
                 <div class="dropdown">
                     <button class="btn btn-dark dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown"
                         aria-expanded="false" style="font-size: 10px">
                         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                             class="bi bi-globe" viewBox="0 0 16 16">
                             <path
                                 d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                         </svg>
                     </button>

                     <ul class="dropdown-menu">
                         <li>
                             <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                                 href="/language/en">
                                 EN
                             </a>
                         </li>

                         <li>
                             <a class="dropdown-item {{ app()->getLocale() == 'hr' ? 'active' : '' }}"
                                 href="/language/hr">
                                 HR
                             </a>
                         </li>
                     </ul>
                 </div>
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
