<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aliencyber.com – The Tech blog | Log in</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href=" {{ asset('assets/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href=" {{ asset('assets/Admin/bower_components/font-awesome/css/font-awesome.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/Admin/bower_components/Ionicons/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="  {{ asset('assets/Admin/dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Admin/plugins/iCheck/square/blue.css') }} ">


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet"
        href="../../../../../fonts.googleapis.com/css5518.css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Ailen</b>Cyber</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('login') }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email"  value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="row">

                    <div class="col-xs-4 pull-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>

                </div>
            </form>
         
        </div>

    </div>


    <script src=" {{ asset('assets/Admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/Admin/plugins/iCheck/icheck.min.js') }}"></script>

</body>
</html>
