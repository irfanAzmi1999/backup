<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="icon" href="/images/faazmiar-logo-only.png" type="image/png">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/progresscircle.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/dark-style.css') }}">

    <!-- Extended -->
    <link href="{{ url('/assets_extended/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('/assets_extended/css/global.css') }}" rel="stylesheet">
    <link href="{{ url('/assets_extended/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('/assets_extended/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ url('/assets_extended/css/color.css') }}" rel="stylesheet">
    <link href="{{ url('/assets_extended/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ url('/assets_extended/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('/assets_extended/css/owl.css') }}" rel="stylesheet">

</head>
<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    @include('../layout/header-nav')
    @yield('header')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$cposts->name}}</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Product</a></li>
                    <li>{{$selected->name}}</li>
                </ul>
            </div>
        </div>
    </div>

   <section class="service-details">
        <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="project-details-content">
                            <div class="data-box">
                                <div class="title-box">
                                    <h3>{{$selected->name}}</h3>
                                    <hr>
                                    <p>
                                        {{$selected->description}}
                                    </p>
                                </div>
                                <figure class="single-image" style="text-align: center;"><img style="width: 550px;" src="{{asset('storage/images/product/'.$selected->id.'/'.$selected->productImage)}}" alt=""></figure>
                                <div class="intro-box">

                                    @foreach($selected->benefits as $key=>$b)
                                    <div class="single-item clearfix">
                                        <div class="left-column">
                                            <div class="icon-box"><i class="flaticon-accept"></i></div>
                                            <span style="width:200px;word-wrap: break-word;">{{$b->title}}</span>
                                            <p></p>
                                        </div>
                                        <div class="right-column">
                                              <p>
                                                {{$b->description}}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="text-align: center;">
                            <img style="margin-top:20px ;width:200px;" src="{{asset('storage/images/product/'.$selected->id.'/principleLogo/'.$selected->principleLogo)}}" alt="" class="wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <h3><b>Product List</b></h3>
                            <hr>
                            <ul class="sidebar-categories clearfix">
                                @foreach($posts as $key=>$product)
                                   <li><a href="{{route('viewProductBasedOnID',[$product->id,$product->category->id])}}"><h5>{{$product->name}}</h5><i class="flaticon-arrow"></i></a></li>
                                @endforeach
                            </ul>
                            <h3><b>Technical Paper</b></h3>
                            <hr>
                            <div class="sidebar-file">
                                <ul class="download-option clearfix">
                                    @foreach($paper as $key=>$item)
                                    <li>
                                        <div class="icon-box"><a href="{{route('viewPaper',[$item->id,$item->filename])}}"><i class="flaticon-download"></i></a></div>
                                        <div class="box">
                                            <figure class="image"><img src="{{ url('/assets_extended/images/icons/icon-6.png') }}" alt=""></figure>
                                            <h5>{{$item->title}}</h5>
                                            <span>{{$item->filesize}} KB</span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
   </section>

    @include('../layout/footer')
    @yield('footer')


<script src="{{ url('/assets/js/jquery.min.js') }}"></script>
<script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ url('/assets/js/progresscircle.min.js') }}"></script>
<script src="{{ url('/assets/js/wow.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ url('/assets/js/odometer.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ url('/assets/js/form-validator.min.js') }}"></script>
<script src="{{ url('/assets/js/contact-form-script.js') }}"></script>
<script src="{{ url('/assets/js/main.js') }}"></script>
</body>
</html>
