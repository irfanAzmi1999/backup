<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Access</title>
     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/plugins/fontawesome-free/css/all.min.css') }}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
     <!-- Tempusdominus Bootstrap 4 -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
     <!-- iCheck -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
     <!-- JQVMap -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/plugins/jqvmap/jqvmap.min.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/dist/css/adminlte.min.css') }}">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
     <!-- Daterange picker -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/plugins/daterangepicker/daterangepicker.css') }}">
     <!-- summernote -->
     <link rel="stylesheet" href="{{ url('/dashboard_assets/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ url('/images/faazmiar-logo-only.png') }}" alt="Faazmiar_Logo" height="60" width="60">
    </div>

    @include('../layout/navBar')
    @yield('navbar')

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{route('adminDashboard')}}" class="brand-link">
            <img src="{{ url('/images/faazmiar-logo-only.png') }}" alt="Faazmiar Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light" style="font-size: 16px">Faazmiar Technology</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>


        @include('../layout/sidebarAdmin')
        @yield('sidebar')
        </div>
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage User Access</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" >Manage User Access</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    

        <section class="content">
            <div class="row">
                <div class="col-12" >
                    <div class="card" style="display:flex">
                        <div class="card-header" style="display:flex"> 
                            
                            <div class="form-control" style="border:0ch">
                                <label for="">
                                    Staff Name :
                                </label>
                                {{ $posts->name }}
                            
                            </div>
                            
                            <div class="form-control" style="border:0ch">
                                <label for="">
                                    Staff Email :
                                 </label>
                                 {{ $posts->email }}
                            </div>
                             
                        
                            <div class="form-control" style="border:0ch">
                                <label for="">
                                    Staff Position : 
                                </label>
                                {{ $posts->jobTitle }}
                            </div>
                           
                            <div class="form-control" style="border:0ch">
                                <label for="">
                                    Staff Role : 
                                </label>
                                {{ $posts->role }}
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="card" style="display:flex">
                        <div class="card-header" style="display:flex"> 
                            
                            <div class="form-control" style="border:0ch">
                                <label for="">
                                    No of Services assigned :
                                </label>
                               0
                            
                            </div>
                            
                            <div class="form-control" style="border:0ch">
                                <label for="">
                                    No of Products assigned :
                                </label>
                              0
                            
                            </div>
                            
                       
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="#">Faazmiar Technology Sdn Bhd</a>.</strong>
        All rights reserved.
    </footer>

</body>


<!-- jQuery -->
<script src="{{ url('/dashboard_assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('/dashboard_assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('/dashboard_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('/dashboard_assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('/dashboard_assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('/dashboard_assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('/dashboard_assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/dashboard_assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('/dashboard_assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('/dashboard_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('/dashboard_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('/dashboard_assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('/dashboard_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/dashboard_assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src=../dashboard_assets/"dist/js/demo.js"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/dashboard_assets/dist/js/pages/dashboard.js') }}"></script>

</html>