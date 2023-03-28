<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Product Details</title>

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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{url('/images/faazmiar-logo-only.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
@include('../layout/navBar')
@yield('navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('adminDashboard')}}" class="brand-link">
            <img src="{{url('/images/faazmiar-logo-only.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light" style="font-size: 16px">Faazmiar Technology</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    {{--                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>



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
                        <h1 class="m-0">Update Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" >Update Product Details</li>
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
                <form action="{{route('updateProductDB',[$posts->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Update Product Form</h3>

                            <div class="card-tools">

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Title" value="{{$posts->name}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Product Image</label><br>
                                        <img src="{{asset('storage/images/product_category/'.$posts->category_id.'/product/'.$posts->id.'/'.$posts->productImage)}}" id="imgOutput" alt="" style="height: 350px">
                                        <input type="file" class="form-control" name="productImage" onchange="loadFile(event)" >
                                    </div>

                                    <div class="form-group">
                                        <label>Product Description</label><br>
                                        <textarea name="productdescription" class="form-control" id=""  cols="20" rows="10">{{$posts->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="currentCatID" value="{{$posts->category_id}}">
                                        <label>Category For</label>
                                        <select name="categoryID" id="" class="form-control">
                                            @foreach($cposts as $key => $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label>Principle Logo :</label><br>
                                        <img src="{{asset('storage/images/product_category/'.$posts->category_id.'/product/'.$posts->id.'/principleLogo/'.$posts->principleLogo)}}" id="imgOutput1" alt="" style="height: 350px"  >
                                        <input type="file" class="form-control" name="principle_logo" onchange="loadFile1(event)">
                                    </div>

                                    <div class="form-group">
                                        <label>Product benefits/advantages :</label> <a  onclick="add()" style="cursor: pointer;">Add New</a>

                                        <div id="divElement">
                                        @foreach($posts->benefits as $key=>$b)
                                            <input id="divElement{{$key+1}}" type="text" style="margin-bottom:20px" class="form-control" name="benefits[]" placeholder="Benefits / Advantages" value="{{$b->title}}" required><textarea id="divElement{{$key+1}}" style="margin-bottom: 20px" class="form-control" placeholder="Description" name="benefitDescription[]">{{$b->description}}</textarea><button id="divElement{{$key+1}}" type="button" onclick="removeExistingElement(this)">Remove</button><hr>
                                        @endforeach
                                        </div>


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
<script src="{{url('/dashboard_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/dashboard_assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
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
<script src="{{url('../dashboard_assets/dist/js/pages/dashboard.js')}}"></script>
</body>

<script>

    var loadFile = function (event)
    {
        var output = document.getElementById("imgOutput");
        output.src =URL.createObjectURL(event.target.files[0]);

    }

    var loadFile1 = function (event)
    {
        var output = document.getElementById("imgOutput1");
        output.src =URL.createObjectURL(event.target.files[0]);

    }
</script>

<script>

    function removeExistingElement(e) {
        let button = e;
        let field = button.previousSibling;
        let title = field.previousSibling;
        let div = button.parentElement;
        let br = button.nextSibling;



        div.removeChild(button);
        div.removeChild(field);
        div.removeChild(title);
        div.removeChild(br);

        let allElements = document.getElementById("divElement");
        let inputs = allElements.getElementsByTagName("input");
        for(i=0;i<inputs.length;i++){
            inputs[i].setAttribute('id', 'divElement' + (i+1));


        }
    }

    function removeElement(e) {
        let button = e.target;
        let field = button.previousSibling;
        let textarea = field.previousSibling;
        let div = button.parentElement;
        let br = button.nextSibling;
        div.removeChild(button);
        div.removeChild(field);
        div.removeChild(textarea);
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
        input.setAttribute("placeholder","Benefits / Advantages");
        input.setAttribute("name","benefits[]");
        input.setAttribute("style","margin-bottom:20px");
        let reqs = document.getElementById("reqs");

        //create textarea
        let textarea = document.createElement('textarea');
        textarea.setAttribute("class","form-control");
        textarea.setAttribute("placeholder","Description");
        textarea.setAttribute("name","benefitDescription[]");
        textarea.setAttribute("style","margin-bottom:20px");

        //create remove button
        let remove = document.createElement('button');
        remove.setAttribute('type','button');
        remove.setAttribute('id', 'reqsr' + reqs_id);
        remove.onclick = function(e) {
            removeElement(e);
        };
        remove.setAttribute("type", "button");
        remove.innerHTML = "Remove";

        //append elements
        reqs.appendChild(input);
        reqs.appendChild(textarea);
        reqs.appendChild(remove);
        let br = document.createElement("hr");
        reqs.appendChild(br);
    }
</script>

</html>
