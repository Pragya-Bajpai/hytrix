<footer class="footer-area footer-bg">
    <div class="container">
        <div class="footer-top pt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}">
                                <img src="public/assets/images/logos/footer-logo.png" alt="Images">
                            </a>
                        </div>
                        <p>
                            We sculpt comprehensive IT solutions, tailored to each industry's unique tapestry. Through
                            data-driven insights and strategic implementations, we empower organizations to navigate
                            digital landscapes seamlessly.
                        </p>
                        <ul class="social-handles">
                            <li>
                                <a href="https://www.facebook.com/Hytrix-Technology-LLP-100882091187155" target="_blank"
                                    title="Facebook">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/HytrixTech" target="_blank" title="Twitter">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/hytrix-technology-llp/" target="_blank"
                                    title="LinkedIn">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/hytrixtech/" target="_blank" title="Instagram">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget pl-5">
                        <h3>Quick Links</h3>
                        <ul class="footer-list">

                            <li>
                                <a href="{{ route('homedashboard') }}"><i class='bx bx-chevron-right'></i>Home </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"><i class='bx bx-chevron-right'></i> Why Choose Us
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('portfolio') }}"> <i class='bx bx-chevron-right'></i> Portfolio
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('career') }}"> <i class='bx bx-chevron-right'></i> Career </a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}"> <i class='bx bx-chevron-right'></i> Contact </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <h3>Quick Contact</h3>
                        <ul class="footer-contact-list">
                            <li>
                                <i class="bx bxs-map"></i>
                                <div class="content">
                                    <a href="contact.html">
                                        <span>D-54, Arjun Tower, Vibhuti Khand, Lucknow, Uttar Pradesh 226010
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <div class="content">
                                    <!--a href="tel:+4498753452435"> +1 408 508 6250 </a-->
                                    <!--a href="tel:+14085086250"> +1 408 508 6250 (Head Office)</a-->
                                    <a href="tel:+919076500530">+919076500530 (Manager)</a>
                                    <a href="tel:+919076500528">+919076500528 (Sales Team)</a>
                                    <!--a href="tel:+919076500529">+919076500529 (Developers Team)</a-->
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-message"></i>
                                <div class="content">
                                    <a href="mailto:hello@techex.com">
                                        info@hytrix.in ,
                                        hytrixtech@gmail.com
                                    </a>
                                </div>
                            </li>
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
        <div class="copy-right-area">
            <div class="copy-right-text d-flex justify-content-between align-items-center flex-wrap">

                <!-- Left Side -->
                <p class="mb-0">
                    Copyright © {{ date('Y') }} All Rights Reserved by Hytrix Technology LLP
                </p>

                <!-- Right Side -->
                <p class="text-white">
                    <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                    |
                    <a href="{{ route('terms.conditions') }}">Terms & Conditions</a>
                </p>

            </div>
        </div>
    </div>
</footer>

<script src="public/assets/js/jquery.min.js"></script>
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="public/assets/js/owl.carousel.min.js"></script>
<script src="public/assets/js/jquery.magnific-popup.min.js"></script>
<script src="public/assets/js/jquery.nice-select.min.js"></script>
<script src="public/assets/js/wow.min.js"></script>
<script src="public/assets/js/meanmenu.js"></script>
<script src="public/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="public/assets/js/form-validator.min.js"></script>
<script src="public/assets/js/contact-form-script.js"></script>
<script src="public/assets/js/custom.js"></script>
<script>
    jQuery.event.special.touchstart = {
        setup: function(_, ns, handle) {
            if (ns.includes("noPreventDefault")) {
                this.addEventListener("touchstart", handle, {
                    passive: false
                });
            } else {
                this.addEventListener("touchstart", handle, {
                    passive: true
                });
            }
        }
    };
</script>
