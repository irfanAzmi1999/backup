<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!--  -->
    <link rel="icon" href="images/faazmiar-logo-only.png" type="image/png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/progresscircle.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/dark-style.css">
    <!-- Extended -->
    <link href="assets_extended/css/style.css" rel="stylesheet">
    <link href="assets_extended/css/global.css" rel="stylesheet">
    <link href="assets_extended/css/animate.css" rel="stylesheet">
    <link href="assets_extended/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets_extended/css/color.css" rel="stylesheet">
    <link href="assets_extended/css/responsive.css" rel="stylesheet">
    <link href="assets_extended/css/flaticon.css" rel="stylesheet">

    <style>
        .project-page .case-block-two .inner-box .image-box .overlay-layer {
            background: -webkit-linear-gradient(-45deg, rgba(0, 187, 110, 0.9), rgba(1, 86, 213, 0.9) 100%);
        }
    </style>
</head>
<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Header -->
    @include('../layout/header-services')
    @yield('header')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Our Services</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Products</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>

   <div class="ai-services-area ptb-100">
    <div class="container">
        <div class="section-title title-width-underline">
            <h2>See wide range of our services</h2>
            <p>Looking for top-notch services that deliver outstanding results? Look no further than our comprehensive and reliable service offerings.</p>
        </div>

{{--        <div class="row justify-content-center">--}}
{{--            @foreach($posts as $key=>$cat)--}}

{{--            <div class="col-lg-4 col-sm-6" onclick="window.location.assign('{{route('viewServBasedOnCat',[$cat->id])}}')" style="cursor:pointer">--}}
{{--                <div class="ai-services-card">--}}
{{--                    <div class="services-image">--}}
{{--                        <img  src="{{asset('storage/images/service_category/'.$cat->id.'/image/'.$cat->image)}}" alt="images" style="height:140px;width:300px;border-radius:10%">--}}
{{--                    </div>--}}
{{--                    <div class="services-content">--}}
{{--                        <h3>--}}
{{--                            <a href="{{route('viewServBasedOnCat',[$cat->id])}}">{{$cat->name}}</a>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

        <section class="case-studies project-page case-style-three" style="padding-top: 10px">
            <div class="auto-container">
                <div class="sortable-masonry">

                    <div class="items-container row clearfix">
                        @foreach($posts as $key=>$cat)
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all finance banking entertainment marketing healthcare">
                            <div class="case-block-two">
                                <div class="inner-box" style="height: 458px;">
                                    <figure class="image-box">
                                        <img src="{{asset('storage/images/service_category/'.$cat->id.'/image/'.$cat->image)}}" style="width:370px;height:235px" alt="">
                                        <div class="link">
                                            {{-- <a href="{{route('viewServBasedOnCat',[$cat->id])}}"> --}}
                                                <a href="#" onclick="javascript:(function() { alert('In Development : Update Change'); })()">
                                                <i class="flaticon-hyperlink"></i></a></div>
                                        <div class="overlay-layer"></div>
                                    </figure>
                                    <div class="lower-content">
                                        <div class="box"  style="padding-left: 0px">
                                            <p>Services</p>
                                            <h4>
                                                {{-- <a href="{{route('viewServBasedOnCat',[$cat->id])}}">{{$cat->name}}</a> --}}
                                                <a href="#" onclick="javascript:(function() { alert('In Development : Update Change'); })()">{{$cat->name}}</a>
                                            </h4>
{{--                                            {{Str::limit($post->shortContent,150)}} --}}
                                        </div>
                                        <div class="text">
                                            <p></p>
                                        </div>
                                        <div class="link">
                                            {{-- <a href="{{route('viewServBasedOnCat',[$cat->id])}}" class="btn-style-four">Read More</a> --}}
                                            <a href="#" class="btn-style-four" onclick="javascript:(function() { alert('In Development : Update Change'); })()">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </section>

    </div>
   </div>

  @include('layout/footer')
    @yield('footer')

    <!-- script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/progresscircle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
