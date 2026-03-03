<div id="cookieBanner" class="position-fixed bottom-0 start-0 end-0 bg-tallow-theme text-white p-4 shadow-lg" style="z-index:1050; display:none;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-3 mb-lg-0">
                <h5 class="text-white">We use cookies</h5>
                <p class="mb-0 small">
                    We use necessary cookies to make our website work. With your consent, we may also use
                    analytics and marketing cookies to improve your experience.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <button class="btn btn-light btn-sm me-2" onclick="acceptAllCookies()">Accept All</button>
                <button class="btn btn-outline-light btn-sm me-2" onclick="rejectCookies()">Reject</button>
                <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#cookieModal">
                    Settings
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Settings Modal -->
<div class="modal fade" id="cookieModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cookie Preferences</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" checked disabled>
                    <label class="form-check-label">
                        Necessary Cookies (Always Active)
                    </label>
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="analyticsCookies">
                    <label class="form-check-label">
                        Analytics Cookies
                    </label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="marketingCookies">
                    <label class="form-check-label">
                        Marketing Cookies
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="savePreferences()">Save Preferences</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (!localStorage.getItem("cookieConsent")) {
            document.getElementById("cookieBanner").style.display = "block";
        }
    });

    function acceptAllCookies() {
        localStorage.setItem("cookieConsent", JSON.stringify({
            necessary: true,
            analytics: true,
            marketing: true
        }));
        hideBanner();
    }

    function rejectCookies() {
        localStorage.setItem("cookieConsent", JSON.stringify({
            necessary: true,
            analytics: false,
            marketing: false
        }));
        hideBanner();
    }

    function savePreferences() {
        const analytics = document.getElementById("analyticsCookies").checked;
        const marketing = document.getElementById("marketingCookies").checked;

        localStorage.setItem("cookieConsent", JSON.stringify({
            necessary: true,
            analytics: analytics,
            marketing: marketing
        }));

        hideBanner();
        bootstrap.Modal.getInstance(document.getElementById('cookieModal')).hide();
    }

    function hideBanner() {
        document.getElementById("cookieBanner").style.display = "none";
    }
</script>