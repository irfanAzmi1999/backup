<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <style>
        body{color: #000;overflow-x: hidden;height: 100%;background-image: url("https://i.imgur.com/GMmCQHC.png");background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>
</head>
<body>

<form action="{{route('register')}}" method="POST">
    @csrf
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Registration Form</h3>

            <div class="card">
                <h5 class="text-center mb-4"></h5>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">Full Name :<span class="text-danger"> *</span></label> <input type="text" name="name" value="{{old('name')}}" placeholder="Full Name">
                            @if ($errors->first('name'))
                                <div class="alert alert-danger">
                                    <ul>
                                        {{$errors->first('name')}}
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">Job Title :<span class="text-danger"> *</span></label> <input type="text" name="jobtitle" value="{{old('jobtitle')}}" placeholder="Job Title">
                            @if ($errors->first('jobtitle'))
                                <div class="alert alert-danger">
                                    <ul>
                                        {{$errors->first('jobtitle')}}
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>



                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="email" id="email" value="{{old('email')}}" name="email" placeholder="Email">
                            @if ($errors->first('email'))
                                <div class="alert alert-danger">
                                    <ul>
                                        {{$errors->first('email')}}
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" value="{{old('phone')}}" name="phone" placeholder="Phone Number">
                            @if ($errors->first('phone'))
                                <div class="alert alert-danger">
                                    <ul>
                                        {{$errors->first('phone')}}
                                    </ul>
                                </div>
                            @endif
                        </div>
                        </div>
                    </div>


                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                    </div>

            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
