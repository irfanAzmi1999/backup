<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career List</title>
    <link rel="icon" href="../images/faazmiar-logo-only.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/boxicons.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.css">
    <link rel="stylesheet" href="../assets/css/progresscircle.min.css">
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/dark-style.css">
    <!--  -->
    <link href="../assets_extended/css/style.css" rel="stylesheet">
    <link href="../assets_extended/css/global.css" rel="stylesheet">
    <link href="../assets_extended/css/animate.css" rel="stylesheet">
    <link href="../assets_extended/css/font-awesome-all.css" rel="stylesheet">
    <link href="../assets_extended/css/color.css" rel="stylesheet">
    <link href="../assets_extended/css/responsive.css" rel="stylesheet">
    <link href="../assets_extended/css/flaticon.css" rel="stylesheet">
    <link href="../assets_extended/css/owl.css" rel="stylesheet">
</head>
<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <div class="navbar-area" style="background-color: black;">
        <div class="evolta-responsive-nav">
            <div class="container">
                <div class="evolta-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="../images/faazmiar.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="evolta-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="../images/faazmiar.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                         <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/product" class="nav-link">Products</a></li>
                        <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="{{route('showNews')}}" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="/career" class="nav-link active">Career</a></li>
                        <li class="nav-item"><a href="/aboutUs" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/trainingServices" class="nav-link">Training</a></li>
                    </ul>


                    </div>
                </nav>
            </div>
        </div>
    </div>

    <section class="technology-style-two" style="">
          <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->


    </div>
  </div>
        <div class="lower-box">
            <div class="anim-icon">
                <span class="icon icon-1" style="background-image: url(assets/images/icons/anim-icon-4.png);"></span>
                <span class="icon icon-2" style="background-image: url(assets/images/icons/anim-icon-5.png);"></span>
                <span class="icon icon-3" style="background-image: url(assets/images/icons/anim-icon-6.png);"></span>
                <span class="icon icon-4" style="background-image: url(assets/images/icons/anim-icon-7.png);"></span>
                <span class="icon icon-5" style="background-image: url(assets/images/icons/anim-icon-8.png);"></span>
                <span class="icon icon-6" style="background-image: url(assets/images/icons/anim-icon-9.png);"></span>
            </div>
            <div class="auto-container" style="margin-top:-150px">
                <div class="section-title" id="titleCareerList">
                    @if ($post->isEmpty() == false)
                        <h2 style="color:white">Join our team and advance your career! Exciting job vacancy available.</h2>
                    @else
                        <h2 style="color:white">No Job Found</h2>
                    @endif

                </div>
                <div class="row clearfix">
                    @foreach($post as $po)
                        <div class="col-lg-6 col-md-12 col-sm-12 technology-block">
                            <div class="technology-block-two wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="border-box">
                                        <span class="border border-1"></span>
                                        <span class="border border-2"></span>
                                    </div>
                                    <figure class="image-box"><img src="" alt=""></figure>
                                    <div class="inner">
                                        <h3>{{$po->jobName}}</h3>
                                        <p>{{$po->shortDescription}}</p>
                                        <a href="{{route('showJob',[$po->id])}}">Read More<i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('layout/footer')
    @yield('footer')

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.meanmenu.js"></script>
    <script src="../assets/js/progresscircle.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/jquery.appear.min.js"></script>
    <script src="../assets/js/odometer.min.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/js/form-validator.min.js"></script>
    <script src="../assets/js/contact-form-script.js"></script>
    <script src="../assets/js/main.js"></script>

    <!-- Javascript extended -->
    <script src="../assets_extended/js/jquery.js"></script>
    <script src="../assets_extended/js/popper.min.js"></script>
    <script src="../assets_extended/js/bootstrap.min.js"></script>
    <script src="../assets_extended/js/owl.js"></script>
    <script src="../assets_extended/js/wow.js"></script>
    <script src="../assets_extended/js/validation.js"></script>
    <script src="../assets_extended/js/jquery.fancybox.js"></script>
    <script src="../assets_extended/js/appear.js"></script>
    <script src="../assets_extended/js/jquery.countTo.js"></script>
    <script src="../assets_extended/js/scrollbar.js"></script>
    <script src="../assets_extended/js/tilt.jquery.js"></script>

    <!-- main-js -->
    <script src="../assets_extended/js/script.js"></script>
</body>
</html>
