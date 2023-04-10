
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update User</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/summernote/summernote-bs4.min.css')}}">

    <style>
        #black_header
        {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{url('/images/faazmiar-logo-only.png')}}" alt="Faazmiar Logo" height="60" width="60">
    </div>

    <!-- Navbar -->
@include('../layout/navBar')
@yield('navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('adminDashboard')}}" class="brand-link">
            <img src="{{url('/images/faazmiar-logo-only.png')}}" alt="Faazmiar Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light" style="font-size: 16px">Faazmiar Technology</span>
        </a>





        <!-- Sidebar Menu -->
    @include('../layout/sidebarAdmin')
    @yield('sidebar')

    </aside>


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Information</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" >Update User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <form action="{{route('user.update',[$posts->id])}}" method="POST">
            @csrf
            @method('PUT')
        <div class="container-fluid">
            <div class="row">
                <div class="card card-primary" style="width: 90rem">
                    <div class="card-header" id="black_header">
                        <h3 class="card-title">User Update Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputBorder">Full Name</label>
                            <input type="text" value="{{$posts->name}}" class="form-control form-control-border" id="exampleInputBorder" name="name" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2">Job Title
                            </label>
                            <input type="text" value="{{$posts->jobTitle}}" class="form-control form-control-border border-width-2" name="job" id="exampleInputBorderWidth2" placeholder="Job Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2">Email Address
                            </label>
                            <input type="text" value="{{$posts->email}}" class="form-control form-control-border border-width-2" name="email" id="exampleInputBorderWidth2" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2">Phone Number
                            </label>
                            <input type="text" value="{{$posts->phoneNumber}}" class="form-control form-control-border border-width-2" name="phoneNumber" id="exampleInputBorderWidth2" placeholder="Phone Number">
                        </div>
                    </div>

                </div>
            </div>
            <div style="text-align: center">
                <input type="submit" class="btn btn-primary">
            </div>

        </div>
        </form>
    </section>

</div>

<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">Faazmiar Technology Sdn Bhd</a>.</strong>
    All rights reserved.

</footer>


<aside class="control-sidebar control-sidebar-dark">

</aside>





<script src="{{url('/dashboard_assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{url('/dashboard_assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{url('/dashboard_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('/dashboard_assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('/dashboard_assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('/dashboard_assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('/dashboard_assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/dashboard_assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('/dashboard_assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('/dashboard_assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('/dashboard_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('/dashboard_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('/dashboard_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/dashboard_assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src=../dashboard_assets/"dist/js/demo.js"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/dashboard_assets/dist/js/pages/dashboard.js')}}"></script>
</body>

<script>
    var loadFile = function (event)
    {
        var output = document.getElementById("imgOutput");
        output.src =URL.createObjectURL(event.target.files[0]);

    }
</script>

<script>

    function removeElement(e) {
        let button = e.target;
        let field = button.previousSibling;
        let div = button.parentElement;
        let br = button.nextSibling;
        div.removeChild(button);
        div.removeChild(field);
        div.removeChild(br);

        let allElements = document.getElementById("reqs");
        let inputs = allElements.getElementsByTagName("input");
        for(i=0;i<inputs.length;i++){
            inputs[i].setAttribute('id', 'reqs' + (i+1));


        }
    }

    function add() {
        let allElements = document.getElementById("reqs");
        let reqs_id = allElements.getElementsByTagName("input").length;

        reqs_id++;

        //create textbox
        let input = document.createElement('textarea');
        // input.type = "textarea";
        input.setAttribute("placeholder", "New Pharagraph");
        input.setAttribute("class", "form-control");
        input.setAttribute("name","content[]");
        let reqs = document.getElementById("reqs");

        //create remove button
        let remove = document.createElement('a');
        remove.setAttribute('id', 'reqsr' + reqs_id);
        remove.onclick = function(e) {
            removeElement(e);
        };
        remove.setAttribute("type", "button");
        remove.innerHTML = "Remove";

        //append elements
        reqs.appendChild(input);
        reqs.appendChild(remove);
        let br = document.createElement("br");
        reqs.appendChild(br);
    }
</script>

</html>
