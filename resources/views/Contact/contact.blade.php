<!doctype html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/magnific-popup.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{asset('assets/css/flaticon.css')}} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/odometer.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/responsive.css') }} ">
    <title>Aliencyber.com – The Tech blog</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }} ">
</head>

<body>
    @include('layouts.header_2')

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
        <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
        <div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
        <div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
        <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    </div>


    <div class="contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i data-feather="mail"></i>
                        </div>
                        <h3>Our Mail</h3>
                        <p><a href="#"><span class="__cf_email__" data-cfemail="0b6a6f6662654b787f6a797f7b25686466">contact@ailencyber.com</span></a></p>
                        <p style="visibility:hidden"><a href="#"><span class="__cf_email__" data-cfemail="0b6a6f6662654b787f6a797f7b25686466">contact@ailencyber.com</span></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i data-feather="map-pin"></i>
                        </div>
                        <h3>Visit Us</h3>
                        <p> 322 N McKinley Avenue 47303 Muncie Indiana, United States of America</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i data-feather="phone"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p><a href="#">+123 456 7890</a></p>
                        <p><a href="#">+241 452 4526</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.5685037281287!2d-85.4097022853265!3d40.19641527693434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88153d12bdb121cb%3A0xa44706571dc41d4e!2s322%20N%20McKinley%20Ave%2C%20Muncie%2C%20IN%2047303%2C%20USA!5e0!3m2!1sen!2s!4v1644496848071!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div>

    <div class="contact-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch With Us</h2>
                <div class="bar"></div>
                <p>Anything On your Mind. We’ll Be Glad To Assist You!</p>
            </div>
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('assets/img/contact.jpg') }}" alt="image">
                </div>
                <div class="col-lg-6 col-md-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')

    <div class="go-top"><i data-feather="arrow-up"></i></div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src=" {{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('assets/js/meanmenu.min.js') }} "></script>
    <script src="{{ asset('assets/js/wow.min.js') }} "></script>
    <script src=" {{ asset('assets/js/magnific-popup.min.js') }} "></script>
    <script src=" {{ asset('assets/js/appear.min.js') }} "></script>
    <script src="{{ asset('assets/js/odometer.min.js') }} "></script>
    <script src=" {{ asset('assets/js/slick.min.js') }} "></script>
    <script src=" {{ asset('assets/js/imagesloaded.pkgd.min.js') }} "></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }} "></script>
    <script src=" {{ asset('assets/js/owl.carousel.min.js') }} "></script>
    <script src=" {{ asset('assets/js/feather.min.js') }}"></script>
    <script src=" {{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src=" {{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src=" {{ asset('assets/js/main.js') }}"></script>
</body>
</html>
