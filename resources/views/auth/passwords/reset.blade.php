{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Reset Password</title>--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">--}}
{{--    <style>--}}
{{--        body{color: #000;overflow-x: hidden;height: 100%;background-image: url("https://i.imgur.com/GMmCQHC.png");background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<form action="{{route('password.update')}}" method="POST" novalidate="">--}}
{{--    @csrf--}}
{{--    <div class="container-fluid px-1 py-5 mx-auto">--}}
{{--        <div class="row d-flex justify-content-center">--}}
{{--            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">--}}
{{--                <h3>Registration Form</h3>--}}

{{--                <div class="card">--}}
{{--                    <h5 class="text-center mb-4"></h5>--}}
{{--                    <input type="hidden" name="token" value="{{$token}}">--}}
{{--                    <input type="hidden" name="email" value="{{ $email }}" />--}}
{{--                    <div class="row justify-content-between text-left">--}}
{{--                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">New Password<span class="text-danger"> *</span>--}}
{{--                            </label> <input type="password"  value="{{old('password')}}" name="password" placeholder="Password">--}}
{{--                        @error('password') {{ $message }}@enderror--}}
{{--                        </div>--}}

{{--                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Confirm number<span class="text-danger"> *</span>--}}
{{--                            </label> <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="Confirm Password">--}}
{{--                       @error('password_confirmation') {{$message}}@enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="row justify-content-end">--}}
{{--                    <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Password</title>
    <link rel="icon" href="../../images/faazmiar-logo-only.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dashboard_assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img src="../../images/faazmiar.png" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Create your new password.</p>

            <form action="{{route('password.update')}}" method="post" novalidate="">
                @csrf
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <input type="hidden" name="token" value="{{$token}}" />
                <input type="hidden" name="email" value="{{ $email }}" />
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <br>
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" value="{{old('password')}}" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <br>
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Submit Password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="{{route('login')}}">Back to Login</a>
            </p>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../dashboard_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../dashboard_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dashboard_assets/dist/js/adminlte.min.js"></script>
</body>
</html>

