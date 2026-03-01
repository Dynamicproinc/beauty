@extends('layouts.app')
{{-- need so much thing to here --}}
@section('title', __('Confirming Your Payment'))
@section('content')
<div class="modal-box">
    <div class="modal-box-content">
        <div class="text-center">
            <span class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</span>
           <h5>{{ __('Your payment is being confirmed. Please do not close or refresh this page.') }}</h5>
            <p>{{__('Please wait...')}}</p>

            
            <div id="status"></div>
        </div>
    </div>
</div>



<script>
    const sessionId = "{{ $sessionId }}";

    function checkStatus() {
        fetch(`/check-payment-status/${sessionId}`)
            .then(response => response.json())
            .then(data => {

                if (data.status === 'paid') {
                    window.location.href = "{{ route('shop.stripe.success', ['stripe_session_id' => $sessionId]) }}";
                }

                if (data.status === 'not_found') {
                    document.getElementById("status").innerText = "Order not found.";
                }
            })
            .catch(error => console.error(error));
    }

    // Check every 3 seconds
    setInterval(checkStatus, 3000);
</script>
@endsection