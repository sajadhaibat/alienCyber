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

    @include('layouts.header')

    <div class="bigdata-analytics-banner">
        <div class="container">
            <div class="bigdata-analytics-content">

                <h1 style="padding-top: 140px !important">Leading Big Data Analytics Company</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <a href="{{ url('contact_us') }}" class="btn btn-primary">Get Started</a>
            </div>
        </div>
        <div class="banner-boxes-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-banner-boxes">
                            <div class="icon">
                                <i data-feather="align-justify"></i>
                            </div>
                            <h3>Blog</h3>
                            <p>Spend your free time on our blog and improve your knowledge about the technology world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-banner-boxes">
                            <div class="icon">
                                <i data-feather="briefcase"></i>
                            </div>
                            <h3>Jobs</h3>
                            <p>Our focus is on those people who are looking to get a job in the tech world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-banner-boxes">
                            <div class="icon">
                                <i data-feather="book-open"></i>
                            </div>
                            <h3>Scholarships</h3>
                            <p>we also make your education dreams come true, our team around the...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Our Recent Story</h2>
                <div class="bar"></div>
            </div>
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


            </div>
        </div>
        <div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
        <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
        <div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
        <div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    </div>


    <div class="funfacts-area bg-image ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>We always try to understand users expectation</h2>
                <div class="bar"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                    <div class="single-funfact">
                        <h3><span class="odometer" data-count="600">00</span>K</h3>
                        <p>Daily Visitors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                    <div class="single-funfact">
                        <h3><span class="odometer" data-count="2">00</span>K</h3>
                        <p>Weekly Blog Posts</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                    <div class="single-funfact">
                        <h3><span class="odometer" data-count="1500">00</span>+</h3>
                        <p>Weekly Jobs</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                    <div class="single-funfact">
                        <h3><span class="odometer" data-count="500">00</span>+</h3>
                        <p>Weekly Scholarships</p>
                    </div>
                </div>
            </div>
            <div class="contact-cta-box">
                <h3>Have any question about us?</h3>
                <p>Don't hesitate to contact us</p>
                <a href="{{ url('contact_us') }}" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>


    <div class="bigdata-feedback-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>What Users Saying</h2>
                <div class="bar"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-feedback-box">
                        <div class="feedback-desc">
                            <p>I am a Cyber Security Specialist in a tech company, every day routinely I am visiting the Alien Cyber Blog portal and it helps me to be up to date from tech world news.</p>
                        </div>
                        <div class="client-info">
                            <img src="assets/img/author1.jpg" alt="image">
                            <h3>John Doolan</h3>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-feedback-box">
                        <div class="feedback-desc">
                            <p>I am excited to announce that I am starting my job career as Software Engineer in a tech company in California through the Alien Cyber job portal.</p>
                        </div>
                        <div class="client-info">
                            <img src="assets/img/author2.jpg" alt="image">
                            <h3>Steven Luis</h3>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="single-feedback-box">
                        <div class="feedback-desc">
                            <p> Thanks, Alien Cyber! now I am a candidate for the Harvard University scholarship, I found this opportunity through the Alien Cyber scholarships portal.</p>
                        </div>
                        <div class="client-info">
                            <img src="assets/img/author3.jpg" alt="image">
                            <h3>Anna Lucy</h3>
                            <span>Data Scientist</span>
                        </div>
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
