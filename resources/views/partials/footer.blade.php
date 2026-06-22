<footer class="footer-area bg-gray-4">
    <div class="footer-top border-bottom-4 pt-55 pb-40">
        <div class="container">
            <div class="row">

                <!-- Logo & Disclaimer -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="footer-widget">
                        <h3 class="footer-title">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                            </a>
                        </h3>

                        <div class="footer-info-list">
                            <p>
                                Eagles Repair is an independent technology information platform.
                                All trademarks, product names, logos, and brand references are the
                                property of their respective owners and are used solely for
                                identification and informational purposes. Eagles Repair does not
                                claim ownership of any third-party trademarks unless expressly
                                stated.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>

                        <div class="footer-info-list">
                            <ul>
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ url('/products') }}">Products</a></li>
                                <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                                <li><a href="{{ url('/faqs') }}">FAQs</a></li>
                                <li><a href="{{ url('/sitemap') }}">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Important Links -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="footer-widget">
                        <h3 class="footer-title">Important Links</h3>

                        <div class="footer-info-list">
                            <ul>
                                <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('/terms-conditions') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('/disclaimer') }}">Disclaimer</a></li>
                                <li><a href="{{ url('/trademark-disclaimer') }}">Trademark Disclaimer</a></li>
                                <li><a href="{{ url('/cookie-policy') }}">Cookie Policy</a></li>
                                <li><a href="{{ url('/quote-request-policy') }}">Quote Request Policy</a></li>
                                <li><a href="{{ url('/product-information-disclaimer') }}">Product Information Disclaimer</a></li>
                                <li><a href="{{ url('/returns-exchange') }}">Returns / Exchange</a></li>
                                <li><a href="{{ url('/authorized-partner-disclosure') }}">Authorized Partner Disclosure</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Info</h3>

                        <div class="footer-info-list">
                            <p>
                                Address: 196 Tosto RD<br>
                                Beaufort, NC 28526<br>
                                info@geektechbuzz.us
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Additional Disclaimer -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p style="margin:0;padding:15px 0;text-align:center;border-top:1px solid #e5e5e5;">
                        Eagles Repair is an information platform offering technology resources, product insights, and
                        helpful content across multiple technology categories.

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom pt-30 pb-30">
        <div class="container">
            <div class="row flex-row-reverse align-items-center">

                <div class="col-lg-6 col-md-6 text-lg-end text-center mb-3 mb-md-0">
                    <div class="payment-img">
                        <a href="#">
                            <img src="{{ asset('assets/images/icon-img/payment-img.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 text-lg-start text-center">
                    <div class="copyright">
                        <p>
                            © 2026
                            <a href="{{ url('/') }}">Eagles Repair</a>
                            All rights reserved.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
