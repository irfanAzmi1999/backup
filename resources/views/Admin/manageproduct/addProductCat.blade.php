<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product Category</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../dashboard_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../dashboard_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../dashboard_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../dashboard_assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dashboard_assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../dashboard_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../dashboard_assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../dashboard_assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../images/faazmiar-logo-only.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
@include('../layout/navBar')
@yield('navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('adminDashboard')}}" class="brand-link">
            <img src="../images/faazmiar-logo-only.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light" style="font-size: 16px">Faazmiar Technology</span>
        </a>





            <!-- Sidebar Menu -->
        @include('../layout/sidebarAdmin')
        @yield('sidebar')
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Product Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" >Add Product Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <form action="{{route('createProduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Add Product Category Form</h3>

                            <div class="card-tools">

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Image</label><br>
                                        <img src="" id="imgOutput" alt="" style="width: 350px">
                                        <input type="file" class="form-control" name="catProductImage" onchange="loadFile(event)" required>

                                    </div>

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="name" placeholder="Title" value="{{old('name')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Category For</label>
                                        <input type="text" class="form-control" name="role" placeholder="Title" value="Product" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Bullet</label> <a  onclick="add()" style="cursor: pointer;">Add New</a>
                                        <input type="text" style="margin-bottom:20px" class="form-control" name="bullet[]" placeholder="" value="{{old('bullet')}}" required>
                                        <div id="reqs">

                                        </div>

                                    </div>

                                </div>


                            </div>
                            <!-- /.row -->


                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                        </div>
                    </div>
                    <div class="" style="text-align: center">
                        <input type="submit" value="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="#">Faazmiar Technology Sdn Bhd</a>.</strong>
        All rights reserved.

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../dashboard_assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../dashboard_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../dashboard_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../dashboard_assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../dashboard_assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../dashboard_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../dashboard_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../dashboard_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../dashboard_assets/plugins/moment/moment.min.js"></script>
<script src="../dashboard_assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../dashboard_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../dashboard_assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../dashboard_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dashboard_assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src=../dashboard_assets/"dist/js/demo.js"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dashboard_assets/dist/js/pages/dashboard.js"></script>
</body>

<script>
    var loadFile = function (event)
    {
        var output = document.getElementById("imgOutput");
        output.src =URL.createObjectURL(event.target.files[0]);

    }
</script>

<script>
    // function add()
    // {
    //     var element = document.createElement("input");
    //
    //     element.setAttribute("type","input");
    //     element.setAttribute("name","responsibility[]");
    //     element.setAttribute("class","form-control");
    //     element.setAttribute("style","margin-bottom:20px");
    //     element.setAttribute("placeholder","Add Responsibility...")
    //
    //     var foo = document.getElementById("fooBar");
    //
    //     foo.appendChild(element);
    //
    // }
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
        let input = document.createElement('input');
        input.type = "text";
        input.setAttribute("class", "form-control");
        input.setAttribute("placeholder","");
        input.setAttribute("name","bullet[]");
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
