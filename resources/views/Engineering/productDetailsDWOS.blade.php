<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWOS</title>
    <link rel="icon" href="../images/faazmiar-logo-only.png" type="image/png">
    <!--  -->
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

    @include('../layout/header-nav')
    @yield('header')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Engineering</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Product</a></li>
                    <li>Engineering</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="inner-box"></div>
                        <div class="two-column">
                            <div class="row clearfix">
                                <div class="" style="text-align: center;">
                                    <h2 style="color: black;">Drilling Well On Simulator (DWOS)</h2><br><br>
                                </div>
                                <div class="col-lg-6 col-md 6 col-sm-12 left-column">
                                    <div class="title-box">
                                        <h2>WellPlanner for dynamic simulations and torque/drag analysis
                                            <!-- during planning & operations phases. -->
                                        </h2>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 right-column">
                                    <p>
                                        Paradigm shift in Optimizing Drilling Operations for hazard prevention,
                                        avoidance of NPT and performance
                                        optimization with the DWOS applications.
                                    </p>
                                    <br>
                                    <p>
                                        Artificial intelligence, machine learning and predictive analytics
                                         technologies are applied to well construction to save cost,
                                        improve safety, and increase efficiency of drilling operations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <figure class="single-image"><img src="" alt=""></figure>
                        <br>
                        <div class="carousel-box">
                            <div class="top-box">
                                <p>
                                    Dynamic simulations for hydraulics and temperature which includes – Multiphase flow, Static and dynamic density, Pressure and flow, Temperature, Rheology of different fluid, Frictional pressure loss, Cuttings load and transport in the annulus, Pit gain;
                                    and Torque and drag which includes – WOB from hook load or vice versa, TOB from surface torque or vice versa, Axial and rotational friction factors, Bit depth corrections due to string elasticity, buoyancy, pump rates and pressure, Well depth, Rotational speed and block speed, Drag forces, Nozzle pulse.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <h3><b>Product List</b></h3>
                        <hr>
                        <ul class="sidebar-categories clearfix">
                            <li><a href="{{route('dwos')}}" class="active"><h5>Well Simulator</h5><i class="flaticon-arrow"></i></a></li>
                            <li><a href="{{route('oliasoft')}}"><h5>Digital Well Plan</h5></a></li>
                        </ul>
                        <!-- <div class="sidebar-file">
                            <h3><b>Case Studies</b></h3>
                            <ul class="download-option clearfix">

                            </ul>
                        </div>
                        <div class="sidebar-award">
                            <h3>Award Winning Service</h3>
                            <figure class="award-image"><img src="../assets_extended/images/" alt=""></figure>
                            <p>To take a trivial example, which idea of ever undertakes.</p>
                        </div> -->
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
