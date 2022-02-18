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
    <style>
        .title-extra {
            margin-bottom: 15px !important;
        }

    </style>
</head>

<body>

    @include('layouts.header_2')


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Posted Jobs</h2>
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


    <div class="features-area ptb-80 bg-f9f6f6">
        <div class="container">

            <div class="row">
                @foreach ($jobs as $job)
                <div class="col-8 offset-2">
                    <div class="single-features">
                        <div class="">
                        <img class="icon" src="{{ asset('jobsImages/'.$job->file) }}">
                        </div>
                        <div class="title-extra" >
                            <h3><a href="{{ url('show_job', $job->id) }}">{{ $job->title }}</a></h3>
                            <div class="title-extra-icons" style="font-size: 12px !important; margin-top: -8px">
                              <span class="text-success"><b>{{ $job->company}},</b></span>
                              <span class="text-success"><b>{{ $job->salary_range }}</b></span>
                            </div>
                        </div>
                       <p> {!! substr( strip_tags($job->description)  , 0 , 90) !!}</p>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    {{ $jobs->links() }}
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
