{{-- ====== Layout: Footer ====== --}}

<footer class="footer-area footer-bg">
    <div class="container">

        {{-- Footer Top --}}
        <div class="footer-top pt-5">
            <div class="row">

                {{-- Col 1: Brand & Social --}}
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ url('public/assets/images/logos/footer-logo.png') }}" alt="Hytrix Technologies">
                            </a>
                        </div>
                        <p>
                            We sculpt comprehensive IT solutions, tailored to each industry's unique tapestry.
                            Through data-driven insights and strategic implementations, we empower organizations
                            to navigate digital landscapes seamlessly.
                        </p>
                        <ul class="social-handles">
                            <li>
                                <a href="https://www.facebook.com/Hytrix-Technology-LLP-100882091187155"
                                    target="_blank"
                                    title="Facebook">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/HytrixTech"
                                    target="_blank"
                                    title="Twitter / X">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/hytrix-technology-llp/"
                                    target="_blank"
                                    title="LinkedIn">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/hytrixtech/"
                                    target="_blank"
                                    title="Instagram">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Col 2: Quick Links --}}
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="footer-widget pl-5">
                        <h3>Quick Links</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{ route('homedashboard') }}">
                                    <i class='bx bx-chevron-right'></i> Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    <i class='bx bx-chevron-right'></i> Why Choose Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}">
                                    <i class='bx bx-chevron-right'></i> Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('career') }}">
                                    <i class='bx bx-chevron-right'></i> Career
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class='bx bx-chevron-right'></i> Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Col 3: Quick Contact --}}
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <h3>Quick Contact</h3>
                        <ul class="footer-contact-list">

                            {{-- Address --}}
                            <li>
                                <i class="bx bxs-map"></i>
                                <div class="content">
                                    <a href="{{ route('contact') }}">
                                        <span>D-54, Arjun Tower, Vibhuti Khand, Lucknow, Uttar Pradesh 226010</span>
                                    </a>
                                </div>
                            </li>

                            {{-- Phone --}}
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <div class="content">
                                    <a href="tel:+919076500530">+91 9076500530 (Manager)</a>
                                    <a href="tel:+919076500528">+91 9076500528 (Sales Team)</a>
                                </div>
                            </li>

                            {{-- Email --}}
                            <li>
                                <i class="bx bx-message"></i>
                                <div class="content">
                                    <a href="mailto:info@hytrix.in">
                                        info@hytrix.in, hytrixtech@gmail.com
                                    </a>
                                </div>
                            </li>

                            {{-- GSTIN --}}
                            <li>
                                <i class="bx bx-receipt"></i>
                                <div class="content">
                                    <span style="color:#fff;"><strong>GSTIN:</strong> 09AAQFH0700E1ZO</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>

        {{-- Copyright Bar --}}
        <div class="copy-right-area">
            <div class="copy-right-text d-flex justify-content-between align-items-center flex-wrap">

                {{-- Left: Copyright --}}
                <p class="mb-0">
                    Copyright &copy; {{ date('Y') }} All Rights Reserved by Hytrix Technology LLP
                </p>

                {{-- Right: Policy links --}}
                <p class="text-white">
                    <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                    |
                    <a href="{{ route('terms.conditions') }}">Terms &amp; Conditions</a>
                </p>

            </div>
        </div>

    </div>
</footer>

{{-- ====== Footer Scripts ====== --}}
<script src="{{ url('public/assets/js/jquery.min.js') }}"></script>
<script src="{{ url('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('public/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('public/assets/js/wow.min.js') }}"></script>
<script src="{{ url('public/assets/js/meanmenu.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ url('public/assets/js/form-validator.min.js') }}"></script>
<script src="{{ url('public/assets/js/contact-form-script.js') }}"></script>
<script src="{{ url('public/assets/js/custom.js') }}"></script>

{{-- Fix passive event listener warning for touchstart --}}
<script>
    jQuery.event.special.touchstart = {
        setup: function(_, ns, handle) {
            this.addEventListener("touchstart", handle, {
                passive: ns.includes("noPreventDefault") ? false : true
            });
        }
    };
</script>

{{-- ====== End: Footer ====== --}}
