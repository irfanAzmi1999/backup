<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faazmiar Offical Site</title>
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
</head>
<body>

<!-- <div class="dark-version">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()"  id="slider">
        <span class="slider round"></span>
    </label>
</div> -->

<div class="preloader">
    <div class="spinner"></div>
</div>

<header class="header-wrap-area">
    <!-- <div class="top-header-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3">
                    <div class="top-header-content">
                        <span>Welcome to Faazmiar Technology.  <a href="contact.html">Need Help?</a></span>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9">
                    <ul class="top-header-info">
                        <li>
                            <i class='bx bx-map'></i>
                            Jalan Jejaka, Maluri, 55100 Kuala Lumpur
                        </li>
                        <li>
                            <i class='bx bx-phone'></i>
                            Contact: <a href="tel:03-9200 8867">03-9200 8867</a>
                        </li>
                        <li>
                            <i class='bx bxl-gmail'></i>
                            Contact Email: <a href="mailto:contact@Faazmiar.com">contact@Faazmiar.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Top Header -->

    <!-- Navbar -->
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
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a href="index.html">
                        <img src="images/faazmiar.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="/product" class="nav-link">Products</a></li>
                            <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="{{route('showNews')}}" class="nav-link">News</a></li>
                            <li class="nav-item"><a href="/career" class="nav-link">Career</a></li>
                            <li class="nav-item"><a href="/aboutUs" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="/trainingServices" class="nav-link">Training</a></li>
                        </ul>

                        <div class="others-options">
                            <div class="option-item"><i class="search-btn flaticon-search"></i>
                                <i class="close-btn fas fa-times"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <a href="contact.html" class="btn btn-primary" style="visibility: hidden;"></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </div>
</header>
<!-- Star Banner -->
<div class="ai-main-banner">
    @if(session('status'))
        <div class="span">
            {{session('status')}}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="ai-banner-content">
                    <h1>Advanced Technologies for Upstream Operations</h1>
                    <p>Faazmiar Technology Sdn Bhd was incorporated with the
                        objective of providing solutions, technologies and technical
                        services to energy industry in Malaysia.</p>
                    <ul class="banner-btn">
                        <li>
                            <!-- <a href="#" class="btn btn-primary">Get Started</a> -->
                        </li>
                    </ul>
                </div>
            </div>

        <!-- Add Shape -->
            <div class="col-lg-6 col-md-12">
                <div class="ai-banner-image">
                    <img src="images/bannerImg.png" alt="image">
                </div>
            </div>
            <div class="ai-banner-partner">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-6 col-sm-3 col-md-3">
                        <div class="partner-card" style="text-align: center;">
                            <a href="#">
                                <!-- <img src="images/petronas.png" alt="clientLogo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-3 col-md-3">
                        <div class="partner-card" style="text-align: center;">
                            <a href="#">
                                <!-- <img src="images/shell.png" style="height:60px;" alt="clientLogo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-3 col-md-3">
                        <div class="partner-card" style="text-align: center;">
                            <a href="#">
                                <!-- <img src="images/instep.png" alt="clientLogo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-3 col-md-3">
                        <div class="partner-card" style="text-align: center;">
                            <a href="#">
                                <!-- <img src="images/Repsol.png" style="height:60px;" alt="clientLogo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-3 col-md-3">
                        <div class="partner-card" style="text-align: right;">
                            <a href="#">
                                <!-- <img src="images/mubadala.png" alt="clientLogo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-3 col-md-3">
                        <div class="partner-card" style="text-align: right;">
                            <a href="#">
                                <div style="height:60px;"></div>
                                <!-- Enquest -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="data-analysis-line-shape" style="position: absolute;left: 0;bottom: 100;z-index: -11;">
        <img src="images/line-shape.png" alt="image">
    </div>

    <div class="ai-banner-large-shape">
        <img src="assets/img/artificial-intelligence/banner/large-shape.png" alt="image">
    </div>



</div>
<!-- End Banner  -->

<div class="solutions-wrap-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title" style="font-size: x-large;">Your Digitalization Partner</span>
            <h2>We Strive to Deliver Excellent Solutions and
                Support Services For Our Client</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="solutions-wrap-card">
                    <h3>
                        <a href="#">Consultancy</a>
                    </h3>
                    <div class="icon">
                        <!-- <i class="flaticon-cloud"></i> -->
                        <img style="height:98px ;" src="images/consulting.png" alt="">
                        <div class="circles-box">
                            <div class="circle-one"></div>
                        </div>
                    </div>
                    <p>We work to innovate with the newest technologies through technical and technology consulting to give the best at the maximum efficiency.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="solutions-wrap-card">
                    <h3>
                        <a href="#">Engineering Analytic</a>
                    </h3>
                    <div class="icon">
                        <img style="height: 98px;" src="images/prototype.png" alt="">

                        <div class="circles-box">
                            <div class="circle-one"></div>
                        </div>
                    </div>
                    <p>We personalized
                        solutions to client’s
                        specific needs by
                        delivering the best quality,
                        robust and cost-effective
                        technical analysis and
                        designs.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="solutions-wrap-card">
                    <h3>
                        <a href="#">Digitalization Dashboard</a>
                    </h3>
                    <div class="icon">
                        <img style="height:98px" src="images/dashboard.png" alt="">

                        <div class="circles-box">
                            <div class="circle-one"></div>
                        </div>
                    </div>
                    <p>We provide dashboards for digitalizing processes, as well as design and engineering services.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="solutions-wrap-card">
                    <h3>
                        <a href="#">Intergrated Operations</a>
                    </h3>
                    <div class="icon">
                        <img style="height:98px" src="images/operation.png" alt="">

                        <div class="circles-box">
                            <div class="circle-one"></div>
                        </div>
                    </div>
                    <p>We assist you in integrating your advanced applications that are still operating in silos.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="solutions-wrap-card">
                    <h3>
                        <a href="#">Professional Development</a>
                    </h3>
                    <div class="icon">
                        <img style="height:98px ;" src="images/online-learning.png" alt="">

                        <div class="circles-box">
                            <div class="circle-one"></div>
                        </div>
                    </div>
                    <p>
                        We offer training
                        opportunity for the
                        clients personnel to have
                        gain industry knowledge.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="solutions-wrap-card">
                    <h3>
                        <a href="#">IT Software & Hardware Services</a>
                    </h3>
                    <div class="icon">
                        <!-- <i class="flaticon-code"></i> -->
                        <img style="height:98px" src="images/app-development.png" alt="">

                        <div class="circles-box">
                            <div class="circle-one"></div>
                        </div>
                    </div>
                    <p>We provide cutting-edge software and hardware to meet your company's needs.</p>
                </div>
            </div>

        </div>

    </div>
    <div class="handle-shape">
        <img src="assets/img/artificial-intelligence/handle/shape.png" alt="image">
    </div>
</div>
<!-- Start Why Choose Us -->
<div class="value-benefits-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="value-benefits-wrap-content">
                    <!-- <span>Value & Benefits</span> -->
                    <h3>Why choose <b>Faazmiar Technology</b>?</h3>
                    <p>Here are just a few reasons to choose <b>Faazmiar Technology</b> for all your business needs.</p>

                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <ul class="list">
                                <li><i class="fa-solid fa-check"></i> Team of Professional</li>
                                <li><i class="fa-solid fa-check"></i> Data Security</li>
                                <li><i class="fa-solid fa-check"></i> Latest Security</li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul class="list">
                                <li><i class="fa-solid fa-check"></i> Accurate & Excellent Results</li>
                                <li><i class="fa-solid fa-check"></i> Cost-Optimization</li>
                            </ul>
                        </div>
                    </div>

{{--                    <div class="value-btn">--}}
{{--                        <a href="#" class="btn btn-primary">Learn More</a>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="value-benefits-wrap-image">
                    <img src="images/chooseUs.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End choose us -->

<!-- Start News -->
<div class="ai-blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title title-with-underline">
            <h2>Dont miss our latest <b style="cursor:pointer" onclick="window.location.assign('/_news')">News</b></h2>
            <p>Explore our latest news and updates</p>
        </div>
        <!-- row justify-content-center -->
        <div class="row justify-content-center">
        @foreach($post as $key=>$news)
            <div class="col-lg-4 col-md-6">
                <div class="ai-blog-card">
                    <div class="entry-thumbnail">
                        <a href="{{route('news_details',[$news->id])}}">
                            <img src="{{asset('storage/images/news/'.$news->id.'/'.$news->image_name)}}" style="height: 250px;border-radius: 10px" alt="">
                        </a>
                    </div>
                    <div class="entry-post-content">
{{--                        <div class="tag">--}}
{{--                            <a href="">Tag Topic</a>--}}
{{--                        </div>--}}
                        <h3><a href="{{route('news_details',[$news->id])}}">
                            {{$news->news_title}}
                        </a></h3>
                        <ul class="entry-meta">
                            <li>By {{$news->User->name}}</li>
                            <li>{{$news->created_at->format('M d, Y')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End News -->

<!--Start Newsletter-->
<div class="ai-subscribe-area ptb-100">
    <div class="container">
    <div class="ai-subscribe-content">
        <h2>Subscribe to our <b>Newsletter</b></h2>
        <form class="newsletter-form" data-toggle="validator" action="#" method="POST">
            <input type="email" class="input-newsletter" placeholder="Input Your Email" name="email" required autocomplete="off">
            <button type="submit">Subscribe</button>
            <div id="validator-newsletter" class="form-result"></div>
            <div class="newsletter-checkbox-btn">
                <input class="inp-cbx" id="cbx" type="checkbox">
                <label class="cbx" for="cbx">
                    <span>
                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </svg>
                    </span>
                    <span>I agree submit data is being collected store</span>
                </label>
            </div>
        </form>
    </div>
    </div>
    <div class="ai-subscribe-shape">
        <img src="assets/img/artificial-intelligence/subscribe-shape.png" alt="">
    </div>
</div>
<!-- End Newsletter -->

<!-- Start Footer -->
@include('layout/footer')
@yield('footer')
<!-- End Footer Area -->
<!-- JS -->
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
<!--  -->
</body>
</html>
