<div>
    <a class="link-secondary position-relative" href="{{ route('shop.cart') }}">
        <i class="bi bi-cart"></i>
        @if (session('cart', []))
            
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ $count }}
            <span class="visually-hidden">cart items</span>
        </span>
        @endif
    </a>
</div>
