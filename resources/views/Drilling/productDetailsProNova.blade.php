<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proNova</title>
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

    <!-- Extended -->
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

    @include('../layout/header-nav')
    @yield('header')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Drilling</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Product</a></li>
                    <li>Drilling</li>
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
                                    <h3>Data Collection Application</h3>
                                    <hr>
                                    <p>
                                        Integrated data collection & aggregation form strong basis for quick & better
                                        decision making during real-time monitoring
                                    </p>
                                    <p>
                                        By using KPI on rig performance, invisible lost time can lead to better manage
                                        consistence rig performance
                                    </p>
                                </div>
                                <figure class="single-image" style="text-align: center;"><img style="width: 400px;" src="../images/Drilling/data collector.jpg" alt=""></figure>
                                <div class="intro-box">
                                    <div class="single-item clearfix">
                                        <div class="left-column">
                                            <div class="icon-box"><i class="flaticon-accept"></i></div>
                                            <span>Data collection & aggregation</span>
                                            <p></p>
                                        </div>
                                        <div class="right-column">
                                            <p>proNova Field Gateway is the hardware and software system to integrate any types of streaming sensor and channel data at the rig-site e.g. mud logging, rig system or the directional drilling company</p>
                                        </div>
                                    </div>
                                    <div class="single-item clearfix">
                                        <div class="left-column">
                                            <div class="icon-box"><i class="flaticon-accept"></i></div>
                                            <span>Invisible Lost Time</span>
                                            <p></p>
                                        </div>
                                        <div class="right-column">
                                            <p>Undertakes laborious physical exercise, except to obtain some from it man who chooses to enjoy.</p>
                                        </div>
                                    </div>
                                    <div class="single-item clearfix">
                                        <div class="left-column">
                                            <div class="icon-box"><i class="flaticon-accept"></i></div>
                                            <span>Trend improvement</span>
                                            <p></p>
                                        </div>
                                        <div class="right-column">
                                            <ul>
                                                <li>Compare actual performance with predefined best practices.</li>
                                                <li> Enhance performance through benchmarking and trend analysis using its  Automated Drilling Performance Measurement (ADPM) system</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="text-align: center;">
                            <img style="margin-top:20px ;width: 300px;" src="../images/Drilling/pronova.png" alt="" class="wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <h3><b>Product List</b></h3>
                            <hr>
                            <ul class="sidebar-categories clearfix">
                                <li><a href="{{route('sitecom')}}"><h5>Data Operation</h5><i class="flaticon-arrow"></i></a></li>
                                <li><a href="{{route('sekal')}}"><h5>Drilling Engineering</h5><i class="flaticon-arrow"></i></a></li>
                                <li><a href="{{route('pronova')}}l" class="active"><h5>Data Collection</h5><i class="flaticon-arrow"></i> </a> </li>
                                <li><a href="{{route('wasproma')}}"><h5>Well Operation</h5><i class="flaticon-arrow"></i></a></li>
                                <li><a href="{{route('dsiddraw')}}"><h5>Rig and Drilling</h5><i class="flaticon-arrow"></i></a></li>
                                <li><a href="{{route('stimline')}}"><h5>Well Intervention</h5><i class="flaticon-arrow"></i></a></li>
                            </ul>

                        </div>
                    </div>



                </div>







        </div>
   </section>

    @include('../layout/footer')
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
</body>
</html>
