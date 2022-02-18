<header id="header" class="headroom navbar-style-two">
    <div class="startp-responsive-nav">
        <div class="container">
            <div class="startp-responsive-menu">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="startp-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }} " alt="logo"  width="250" height="80"></a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ url('about_us') }}" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Opportunities <i data-feather="chevron-down"></i></a>
                            <ul class="dropdown_menu">

                                <li class="nav-item"><a href="{{ url('site/scholarships') }}" class="nav-link">Scholarships</a></li>
                                <li class="nav-item"><a href="{{ url('site/jobs') }}" class="nav-link">Jobs</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="{{ url('site/blogs') }}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{ url('contact_us') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>

</header>
