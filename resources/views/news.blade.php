<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
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

</head>
<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <div class="navbar-area">
        <div class="evolta-responsive-nav">
            <div class="container">
                <div class="evolta-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/faazmiar.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="evolta-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/faazmiar.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="/product" class="nav-link">Products</a></li>
                            <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="{{route('showNews')}}" class="nav-link active">News</a></li>
                            <li class="nav-item"><a href="/career" class="nav-link">Career</a></li>
                            <li class="nav-item"><a href="/aboutUs" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="/trainingServices" class="nav-link">Training</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>News</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">

                @foreach($post as $post)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block" style="margin-bottom: 50px">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="">
                                    <img src="{{asset('storage/images/news/'.$post->id.'/'.$post->image_name)}}" style="height: 250px;border-radius: 10px" alt="">
                                    <a href="assets/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
{{--                                    <div class="file-box"><i class="far fa-folder-open"></i><p>Data Engineering</p></div>--}}
                                    <div class="title-box">
                                        <div class="post-date"><p>{{$post->created_at->format('d')}}</p><span>{{$post->created_at->format('M')}}</span></div>
                                        <h4><a href="{{route('news_details',[$post->id])}}">{{$post->news_title}}</a></h4>
                                    </div>
                                    <div class="text">
                                        @foreach($post->pharagraphs as $key=>$phara)
                                            @if($key == 0)
                                                <p style="text-align: justify">{{Str::limit($phara->content,150)}}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="link">
                                        <a href="{{route('news_details',[$post->id])}}" class="btn-style-four">Read More<span>+</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


   @include('layout/footer')
    @yield('footer')

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
