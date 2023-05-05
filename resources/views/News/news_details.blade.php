<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="og:url" content="{{$url}}">
    <meta property="og:title" content="{{$post->news_title}}">
    <meta property="og:description" content="{{ $post->shortContent }}">
    <meta property="og:image" content="{{asset('storage/images/news/'.$post->id.'/'.$post->image_name)}}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <script src="../assets_extended/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
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

    <style>
        ul, li {
            list-style: inherit;
            padding: 0px;
            margin: 0px;
        }
        .info-box.clearfix li{
            list-style: none;
        }

        .social-list.clearfix li
        {
            list-style: none;
        }
    </style>
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
                <a class="navbar-brand" href="../index.html">
                    <img src="../images/faazmiar.png" alt="logo">
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


<section class="page-title text-center style-two" style="background : black">
    <div class="auto-container">
        <div class="content-box">
{{--            <h2>{{$post->news_title}}</h2>--}}
            <h2>News</h2>
            <ul class="info-box clearfix">
                <li><i class="far fa-user"></i><span>Author:</span> {{$post->User->name}}</li>
                <li><i class="far fa-calendar-alt"></i><span>Posted On:</span> {{$post->created_at->format('d M, Y')}}</li>

            </ul>
        </div>
    </div>
</section>

<section class="sidebar-page-container blog-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="inner-box">
                        <div class="text">

                            <h3>{{$post->news_title}}</h3>

                        </div>
                        <figure class="image-box" style="text-align:center">
                            <img src="{{asset('storage/images/news/'.$post->id.'/'.$post->image_name)}}" alt="" style="height:350px">
                        </figure>
                        <div class="text">
{{--                            @foreach($post->pharagraphs as $key=>$p)--}}
{{--                            <p align="justify">{{$p->content}}</p>--}}
{{--                            @endforeach--}}
                            {!!  $post->texteditor !!}
                        </div>

                    </div>
                    <div class="post-share-option">
                        <div class="post-tags">
                            <ul class="tags-list clearfix">
{{--                                <li><i class="fas fa-tags"></i><h5>Tags:</h5></li>--}}
{{--                                <li><a href="blog-details.html">Analysis</a>,</li>--}}
{{--                                <li><a href="blog-details.html">Consulting</a>,</li>--}}
{{--                                <li><a href="blog-details.html">Data</a>,</li>--}}
{{--                                <li><a href="blog-details.html">Engineering</a></li>--}}
                            </ul>
                        </div>
                        <div class="post-social">
                            <h5>Share this post with your friends</h5>
                            <ul class="social-list clearfix">
                                <li>
                                    <a href="{{$share['facebook']}}" style="background-color: #3b5998"><i class="fab fa-facebook-f"></i>Facebook</a>
                                </li>
                                <li>
                                    <a href="{{$share['twitter']}}" style="background-color: #00acee"><i class="fab fa-twitter"></i>Twitter</a>
                                </li>
                                <li>
                                    <a href="{{$share['whatsapp']}}" style="background-color: #25D366"><i class="fab fa-whatsapp"></i>Whatsapp</a>
                                </li>
                                <li>
                                    <a href="{{$share['linkedin']}}" style="background-color: #0072b1"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                                </li>

{{--                                <li><a href="blog-details.html"><i class="fab fa-twitter"></i>Twiter</a></li>
{{--                                <li><a href="blog-details.html"><i class="fab fa-linkedin-in"></i>Linkedin</a></li>--}}
{{--                                <li><a href="blog-details.html"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>--}}
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <div class="search-box">
                            <form action="" method="">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Keyword..." required="">
                                    <button type="submit" class="theme-btn style-one">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-post">
                        <div class="widget-title">
                            <h3>Latest Post</h3>
                        </div>
                        <div class="post-inner">
                            @foreach($popularPost as $popular)
                            <div class="post">
                                <div class="post-date"><p>{{$popular->created_at->format('d')}}</p><span>{{$popular->created_at->format('M')}}</span></div>
                                <h5 style="margin-bottom: 20px"><a href="{{route('news_details',[$popular->id])}}">{{$popular->news_title}} </a></h5>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
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

</body>
</html>
