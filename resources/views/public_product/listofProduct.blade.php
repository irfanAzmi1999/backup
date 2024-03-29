<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product</title>
    <link rel="icon" href="{{url('images/faazmiar-logo-only.png')}}" type="image/png">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/progresscircle.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/dark-style.css')}}">
    <!-- Extended -->
    <link href="{{url('assets_extended/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets_extended/css/global.css')}}" rel="stylesheet">
    <link href="{{url('assets_extended/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('assets_extended/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{url('assets_extended/css/color.css')}}" rel="stylesheet">
    <link href="{{url('assets_extended/css/responsive.css')}}" rel="stylesheet">

    <style>
        .case-block-one .inner-box:before {
            background: -webkit-linear-gradient(-45deg, #06bedf, #033fe4 100%);
        }

        .single-services-box{
            cursor: pointer;
            border-radius:50px;
        }
        .service-block
        {
            cursor: pointer;
            margin-bottom: 50px;
        }

        .mb-60 {
            margin-bottom: 37px !important;
        }

        .pagination{
            top:-31px;
        }
    </style>
</head>
<body>

<div class="preloader">
    <div class="spinner"></div>
</div>

<!-- Header -->
<div class="navbar-area" style="background-color:black">
    <div class="evolta-responsive-nav">
        <div class="container">
            <div class="evolta-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{url('images/faazmiar.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="evolta-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{url('images/faazmiar.png')}}" alt="logo">
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

<section class="services-area ptb-110 bg-fafafa">
    <div class="container">
        <div class="row">
            <div class="sec-title text-center mb-60" style="top:20px">
{{--                <p>Unleash drilling efficiency with our game-changing solution.</p>--}}
                <h2>Our <strong>{{$category->name}}</strong> Solutions</h2>
                <div class="decor" style="background-image: {{url('assets/images/icons/decor-1.png')}};"></div>
            </div>

            @foreach($posts as $key=>$items)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box" onclick="redirect('{{ $items->id }}','{{ $category->id }}')">
                    <div class="icon">
                        <img src="{{asset('storage/images/product/'.$items->id.'/secondImage/'.$items->productImageSecond)}}" alt="image" style="height: 85px">
                    </div>
                    <h3><a href="/manage_product/viewProductID/{{ $items->id }}/{{ $category->id }}" style="font-size: large">{{$items->name}}</a></h3>
                  <p>{{ $items->briefDescription }}</p>
                </div>
            </div>
            @endforeach


        </div>
        <div class="d-flex justify-content-center" style="margin-top:5px">
            {{$posts->links()}}
        </div>
    </div>

    <div class="services-shape"><img src="{{url('/assets/img/services-shape.png')}}" alt="image"></div>
</section>

<footer class="footer-area bg-wrap-color" style="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="index.html"><img src="{{url('images/faazmiar.png')}}" alt="image"></a>
                        <!-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> -->
                    </div>

                    <ul class="social">
                        <a href="https://www.facebook.com/faazmiartechnology/" target="_blank"><img src="{{url('images/facebook.png')}}" alt=""></a>
                        <a href="https://www.linkedin.com/company/faazmiar-technology" target="_blank"><img src="{{url('images/linkedln.png')}}"/></a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>

                    <ul class="quick-links-list">
                        <li><a href="product.html">Products</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="careerList.html">Career</a></li>
                        <li><a href="aboutUs.html">About us</a></li>
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
        <img src="{{url('assets/img/artificial-intelligence/footer-shape-1.png')}}" alt="image">
    </div>

    <div class="footer-shape-2">
        <img src="{{url('assets/img/artificial-intelligence/footer-shape-2.png')}}" alt="image">
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>

<!-- Javascript -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{url('assets/js/progresscircle.min.js')}}"></script>
<script src="{{url('assets/js/wow.min.js')}}"></script>
<script src="{{url('assets/js/jquery.appear.min.js')}}"></script>
<script src="{{url('assets/js/odometer.min.js')}}"></script>
<script src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{url('assets/js/form-validator.min.js')}}"></script>
<script src="{{url('assets/js/contact-form-script.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
<script>
    function redirect(itemid,catid)
    {
        var link = '/manage_product/viewProductID/'+itemid+'/'+catid;
        window.location.href=link;
    }



</script>
</body>
</html>
