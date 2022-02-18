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
                    <h2>Our Blogs</h2>
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


    <div class="blog-area ptb-80">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="blog-image">
                                <a href="{{ url('show_blog', $blog->id) }}">
                                    <img src="{{ asset('blogImages/'.$blog->file) }}" alt="image">
                                </a>
                                <div class="date">
                                    <i data-feather="calendar"></i>
                                    {{ date_format(new DateTime($blog->date), 'F d, Y') }}
                                </div>
                            </div>
                            <div class="blog-post-content">
                                <h3><a href="{{ url('show_blog', $blog->id) }}">{!! substr($blog->headline, 0, 41) !!}</a></h3>
                                <span>by <a href="{{ url('show_blog', $blog->id) }}">admin</a></span>
                                <p>{!! substr($blog->content, 0, 100) !!}...</p>
                                <a href="{{ url('show_blog', $blog->id) }}" class="read-more-btn">Read More <i
                                        data-feather="arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        {{ $blogs->links() }}
                    </div>
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
