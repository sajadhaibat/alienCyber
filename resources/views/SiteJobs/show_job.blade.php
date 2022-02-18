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
    <link rel="stylesheet" href=" {{ asset('assets/css/flaticon.css') }} ">
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
                    <h2>Job Details</h2>
                </div>
            </div>
        </div>
        <div class="shape1"><img src="{{ asset('assets/img/shape1.png') }}" alt="shape"></div>
        <div class="shape2 rotateme"><img src=" {{ asset('assets/img/shape2.svg') }}" alt="shape"></div>
        <div class="shape3"><img src="{{ asset('assets/img/shape3.svg') }}" alt="shape"></div>
        <div class="shape4"><img src="{{ asset('assets/img/shape4.svg') }} " alt="shape"></div>
        <div class="shape5"><img src=" {{ asset('assets/img/shape5.png') }}" alt="shape"></div>
        <div class="shape6 rotateme"><img src="{{ asset('assets/img/shape4.svg') }} " alt="shape"></div>
        <div class="shape7"><img src=" {{ asset('assets/img/shape4.svg') }} " alt="shape"></div>
        <div class="shape8 rotateme"><img src=" {{ asset('assets/img/shape2.svg') }}" alt="shape"></div>
    </div>


    <div class="shop-details-area ptb-80" style="background-color: rgb(247,250,253)">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-8 offset-2" >
                    <div class="products-details">
                        <h2>{{ $job->title }}</h2>
                        <div class="price">
                            {{ $job->salary_range }}
                        </div>
                        <hr>
                        <div class="row">
                            <div class="project-details-desc">
                                <div class="project-details-information">
                                    <div class="single-info-box">
                                        <h6>Date Posted</h6>
                                        <p>{{ $job->start_date }}</p>
                                    </div>
                                    <div class="single-info-box">
                                        <h6>Closing Date</h6>
                                        <p>{{ $job->closing_date }}</p>
                                    </div>
                                    <div class="single-info-box">
                                        <h6>Salary</h6>
                                        <p>{{ $job->salary_range }}</p>
                                    </div>
                                    <div class="single-info-box">
                                        <h6>Company</h6>
                                        <p>{{ $job->company }}</p>
                                    </div>
                                    <div class="single-info-box">
                                        <h6>Location</h6>
                                        <p>{{ $job->location }}</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <h4>Description</h4>

                        {!! $job->description !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br>
    <br>


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
