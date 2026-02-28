<h2>⏳ Confirming your payment...</h2>
<p>Please wait. Do not close this page.</p>

<div id="status"></div>

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