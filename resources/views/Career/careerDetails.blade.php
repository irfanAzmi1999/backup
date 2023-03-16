<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
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

<div class="navbar-area">
    <div class="evolta-responsive-nav">
        <div class="container">
            <div class="evolta-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="../images/faazmiar.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="evolta-nav" style="background: black">
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
                        <li class="nav-item"><a href="/_news" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="/career" class="nav-link active">Career</a></li>
                        <li class="nav-item"><a href="/aboutUs" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/trainingServices" class="nav-link">Training</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<section class="service-details" id="serviceArea">

    <div class="auto-container">
        <div class="row clearfix">
            <div class="" style="text-align:center">
                <h2>Position : {{$post->jobName}}</h2>
                <hr>
            </div>
            <p><b>Description :</b></p>
            <p style="margin-bottom:50px ">{{$post->jobDescription}}</p>
            <p><b>Responsibilities :</b></p>
            <ul>
                @foreach($post->responsibilities as $key=>$res)
                    <li style="list-style-type: disc;">{{$res->description}}</li>
                @endforeach

            </ul>


        </div>
        <button type="button" style="margin-top: 20px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Apply Now</button>
        <!-- <button class="btn btn-primary" style="margin-top: 20px;" data-toggle="modal" data-target="#exampleModal">Apply Now</button> -->
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Position Application : {{$post->jobName}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="applicant-name" class="col-form-label">Name :</label>
                        <input type="text" class="form-control" id="applicant-name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone-number" class="col-form-label">Phone Number :</label>
                        <input type="text" class="form-control" id="phone-number" required>
                    </div>
                    <div class="form-group">
                        <label for="user-email" class="col-form-label">Email :</label>
                        <input type="email" class="form-control" id="user-email" required>
                    </div>
                    <div class="form-group">
                        <label for="user-job" class="col-form-label">Current Job :</label>
                        <input type="text" class="form-control" id="user-job" required>
                    </div>
                    <div class="form-group">
                        <label for="CVfile-upload" class="col-form-label">CV :</label>
                        <input type="file" class="form-control" id="CVfile-upload" required>
                    </div>
                    <div class="form-group">
                        <label for="Resumefile-upload" class="col-form-label">Resume :</label>
                        <input type="file" class="form-control" id="Resumefile-upload" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit Application</button>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area bg-wrap-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="index.html"><img src="../images/faazmiar.png" alt="image"></a>
                    </div>
                    <ul class="social">
                        <a href="https://www.facebook.com/faazmiartechnology/" target="_blank"><img src="../images/facebook.png" alt=""></a>
                        <a href="https://www.linkedin.com/company/faazmiar-technology" target="_blank"><img src="../images/linkedln.png" alt=""></a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>
                    <ul class="quick-links-list">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contacts</h3>
                    <ul class="footer-contact-list">
                        <li><span>Address:</span> Jalan Jejaka, Taman Maluri. 55100 Kuala Lumpur, Malaysia</li>
                        <li><span>Email:</span> <a href="#"> contact@faazmiar.com</a></li>
                        <li><span>Phone:</span> <a href="#">03-9200 8867</a></li>
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
                    <p>Copyright © 2023 Faazmiar Technology Sdn Bhd</p>
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
</footer>
<script src="../assets/js/jquery.min.js"></script>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>

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
