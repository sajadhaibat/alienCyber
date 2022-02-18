<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AilenCyber | Admin Dashboard</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('assets/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href=" {{ asset('assets/Admin/bower_components/font-awesome/css/font-awesome.min.css') }} ">

    <link rel="stylesheet" href=" {{asset('assets/Admin/bower_components/Ionicons/css/ionicons.min.css')}} ">

    <link rel="stylesheet" href="{{ asset('assets/Admin/bower_components/jvectormap/jquery-jvectormap.css') }}">

    <link rel="stylesheet" href=" {{ asset('assets/Admin/dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Admin/dist/css/skins/_all-skins.min.css') }} ">


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    @yield('styles')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">

            <a href="index2.html" class="logo">

                <span class="logo-mini"><b>A</b>Cy</span>

                <span class="logo-lg"><b>Alien</b>Cyber</span>
            </a>

            <nav class="navbar navbar-static-top">

                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">



                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('assets/Admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">Admin</span>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="user-header">
                                    <img src=" {{ asset('assets/Admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                    <p>
                                        Admin
                                    </p>
                                </li>



                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @include('Admin.layouts.sidebar')

        <div class="content-wrapper">

            <section class="content-header">
                <h1>
                    @yield('section-header')
                </h1>

            </section>

            <section class="content">

                @yield('content')


            </section>

        </div>




    </div>



    <script src=" {{ asset('assets/js/jquery.min.js') }} "></script>
    <script src=" {{ asset('assets/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>

    <script src="{{ asset('assets/Admin/bower_components/fastclick/lib/fastclick.js') }}"></script>

    <script src=" {{ asset('assets/Admin/dist/js/adminlte.min.js') }} "></script>

    <script src=" {{ asset('assets/Admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }} "></script>

    <script src=" {{ asset('assets/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }} "></script>
    <script src=" {{ asset('assets/Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }} "></script>

    <script src=" {{ asset('assets/Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }} "></script>

    <script src=" {{ asset('assets/Admin/bower_components/chart.js/Chart.js') }} "></script>

    <script src=" {{ asset('assets/Admin/dist/js/pages/dashboard2.js') }} "></script>

    <script src=" {{ asset('assets/Admin/dist/js/demo.js') }} "></script>
    @yield('scripts')
</body>
</html>
