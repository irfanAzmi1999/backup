<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product</title>
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

<!-- Header -->
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
                            <li class="nav-item"><a href="/product" class="nav-link active">Products</a></li>
                            <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="{{route('showNews')}}" class="nav-link">News</a></li>
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
                    <h2>Product Category</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Product Start -->
        <section class="service-section-five">
            <div class="auto-container">
                <div class="sec-title text-center mb-60">
                    <p>Experience quality, value, and innovation in one with our products designed to exceed your expectations.</p>
                    <h2>Explore our current products<br/> below</h2>
                    <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
                </div>
                <div class="row clearfix">

                    @foreach($posts as $key=>$cat)
                    @if ($key % 2 == 0)
                    <div class="col-lg-6 col-md-6 col-sm-12 block-column">
                        <div class="service-block-five wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-data"></i></div>
                                <h3 style="width:250px;word-wrap: break-word;"><a href="{{ route('viewProdBasedOnCat',[$cat->id]) }}">{{ $cat->name }}</a></h3>
                                <ul class="list-item clearfix">
                                    @foreach ($cat->bullets as $bullet )
                                        <li style="width:250px;word-wrap: break-word;"><span class="dots"></span>{{ $bullet->content }}</li>
                                    @endforeach
                                </ul>
                                <figure class="image-box" style="top: -5px"><img style="width:450px;border-radius:5%;height: 222px" src="{{asset('storage/images/product_category/'.$cat->id.'/image/'.$cat->image)}}"></figure>
                                <div class="link"><a href="{{ route('viewProdBasedOnCat',[$cat->id]) }}" class="btn-style-four">Read More<span>+</span></a></div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-6 col-md-6 col-sm-12 block-column">
                        <div class="service-block-five wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-brain"></i></div>
                                <h3 style="width:250px;word-wrap: break-word;"><a href="{{ route('viewProdBasedOnCat',[$cat->id]) }}">{{ $cat->name }}</a></h3>
                                <ul class="list-item clearfix">
                                    @foreach ($cat->bullets as $bullet )
                                        <li style="width:250px;word-wrap: break-word;"><span class="dots"></span>{{ $bullet->content }}</li>
                                    @endforeach
                                </ul>
                                <figure class="image-box" style="top: -5px"><img style="width: 450px;border-radius:5%;height: 222px" src="{{asset('storage/images/product_category/'.$cat->id.'/image/'.$cat->image)}}" alt=""></figure>
                                <div class="link">
                                    <a href="{{ route('viewProdBasedOnCat',[$cat->id]) }}" class="btn-style-four">
                                        Read More
                                        <span>+</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
        </section>

        <footer class="footer-area bg-wrap-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <a href="index.html"><img src="images/faazmiar.png" alt="image"></a>
                                <!-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> -->
                            </div>

                            <ul class="social">
                                <a href="https://www.facebook.com/faazmiartechnology/" target="_blank"><img src="images/facebook.png" alt=""></a>
                                <a href="https://www.linkedin.com/company/faazmiar-technology" target="_blank"><img src="images/linkedln.png"/></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Quick Links</h3>

                            <ul class="quick-links-list">
                                <li><a href="/product">Products</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/news">News</a></li>
                                <li><a href="/career">Career</a></li>
                                <li><a href="/aboutUs">About us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contacts</h3>

                            <ul class="footer-contact-list">
                                <li><span>Address:</span> Jalan Jejaka, Taman Maluri. 55100 Kuala Lumpur, Malaysia</li>
                                <li><span>Email:</span> <a href="mailto:contact@faazmiar.com"> contact@faazmiar.com</a></li>
                                <li><span>Phone:</span> <a href="tel:03-9200 8867">03-9200 8867</a></li>
                                <li><span>Fax:</span> <a href="#">03-9200 9967</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p>Copyright © 2023 Faazmiar Technology Sdn Bhd <!--<a href="https://envytheme.com/" target="_blank">Home</a> --></p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-shape-1">
                <img src="assets/img/artificial-intelligence/footer-shape-1.png" alt="image">
            </div>

            <div class="footer-shape-2">
                <img src="assets/img/artificial-intelligence/footer-shape-2.png" alt="image">
            </div>

            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </footer>

<!-- Javascript -->
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
