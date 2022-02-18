<footer class="footer-area bg-f7fafd">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Company</h3>
                    <ul class="list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('about_us') }}">About Us</a></li>
                        <li><a href="{{ url('site/blogs') }}">Blogs</a></li>
                        <li><a href="{{ url('site/jobs') }}">Jobs</a></li>
                        <li><a href="{{ url('site/scholarships') }}">Scholarships</a></li>
                        <li><a href="{ url('contact_us') }}">Contact us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Address</h3>
                    <ul class="footer-contact-info">
                        <li><i data-feather="map-pin"></i> 322 N McKinley Avenue 47303 Muncie Indiana, United States of America</li>
                        <li><i data-feather="mail"></i> Email: <a href="contact@ailencyber.com"><span class="__cf_email__" data-cfemail="127a777e7e7d526166736066623c717d7f">contact@ailencyber.com</span></a></li>
                    </ul>
                    <ul class="social-links">
                        <li><a href="#" class="facebook" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" class="twitter" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="#" class="instagram" target="_blank"><i data-feather="instagram"></i></a></li>
                        <li><a href="#" class="linkedin" target="_blank"><i data-feather="linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="copyright-area">
                    <p>Copyright @2022 AlienCyber. All Rights Reserved by <a href="{{ url('/') }}" target="_blank">AlienCyber</a></p>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/img/map.png') }}" class="map" alt="map">
    <div class="shape1"><img src="{{ asset('assets/img/shape1.png') }}" alt="shape"></div>
    <div class="shape8 rotateme"><img src="{{ asset('assets/img/shape2.svg') }}" alt="shape"></div>
</footer>
