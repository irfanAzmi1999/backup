<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Technical Paper List</title>

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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{route('addPaper',[$role,$type->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload <a href="{{route('viewProduct',[$type->id])}}">{{$type->name}}</a> technical paper</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file-paper" class="col-form-label">Upload file : </label>
                        <code>pdf only*</code>
                        <input type="file" class="form-control" id="file-paper" name="paper" accept="application/pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="file-name" class="col-form-label">Title : </label>
                        <input type="text" class="form-control" id="file-name" name="name" required>
                    </div>
                    <input type="submit" class="btn btn-primary form-control" value="Upload">
                </div>
            </div>
            </form>
        </div>
    </div>



    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Technical Paper</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" >Technical Paper</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Technical Paper for : <a href="{{route('viewProduct',[$type->id])}}">{{$type->name}}</a></h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Paper </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>File Name</th>
                                    <th>View/Download</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($posts as $key=>$item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->filename}}</td>
                                            <td><a href="{{route('viewPaper',[$item->id,$item->filename])}}">View</a></td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Update</a> | <a href="#" onclick="deleteFunction()">Remove</a>

                                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="" method="POST" enctype="multipart/form-data">

                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Update <a href="{{route('viewProduct',[$type->id])}}">{{$type->name}}</a> technical paper</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="fileID" class="col-form-label">ID : </label>
                                                                        <input type="text" class="form-control" id="fileID" value="{{$item->id}}" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="file-paper" class="col-form-label">New Paper : </label>
                                                                        <code>pdf only*</code>
                                                                        <input type="file" class="form-control" id="file-paper" name="paper" accept="application/pdf" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="file-name" class="col-form-label">Title : </label>
                                                                        <input type="text" class="form-control" id="file-name" name="name" value="{{$item->title}}" required>
                                                                    </div>
                                                                    <input type="submit" class="btn btn-primary form-control" value="Upload">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                                <form action="{{route('deletePaper',[$role,$item->id,$type->id])}}" method="POST" id="frmDelete{{$item->id}}">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                                <script>
                                                    function deleteFunction()
                                                    {
                                                        let status = confirm('Delete this paper?');
                                                        if(status == true)
                                                        {
                                                            document.getElementById('frmDelete{{$item->id}}').submit();
                                                        }
                                                        else {

                                                        }

                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                           <td colspan="4" style="text-align: center">No Paper Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>

    </div>

    @if(Session::has('message'))
        <script>
            alert('{{Session::get('message')}}');
        </script>
    @endif

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
</html>
