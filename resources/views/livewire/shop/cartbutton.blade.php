<div>
    
    <a class="link-secondary position-relative scrolled" href="{{ route('shop.cart') }}">
        <i class="bi bi-cart"></i>
        @if (session('cart', []))
            
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-tallow-theme">
            {{ $count }}
            <span class="visually-hidden">cart items</span>
        </span>
        @endif
    </a>
   
</div>
