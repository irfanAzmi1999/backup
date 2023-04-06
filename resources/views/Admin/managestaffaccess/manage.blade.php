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

    <style>
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link
        {
            color: #fff;
            background-color: #7c8289;
        }
    </style>

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
                                    No of Products assigned :
                                </label>
                                {{$noP}}
                            </div>

                            <div class="form-control" style="border:0ch">
                                <label for="">
                                    No of Services assigned :
                                </label>
                                {{$noS}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- Custom Tabs -->
                            <div class="card">
                                <div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3">Assign Product / Service</h3>
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Products</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Services</a></li>
                                    </ul>
                                </div>
                                <form action="{{route('assignPS',[$posts->id])}}" method="POST">
                                    @method('POST')
                                    @csrf
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="tab_1">
                                            <div id="accordion">
                                                @foreach($cProduct as $key=>$item)
                                                <div class="card card-primary">
                                                    <div class="card-header" style="background-color: #7c8289">
                                                        <h4 class="card-title w-100">
                                                            <a class="d-block w-100" data-toggle="collapse" href="#collapse{{$key}}">
                                                                Category : {{$item->name}}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse{{$key}}" class="collapse show" data-parent="#accordion">
                                                        <div class="card-body">
                                                          <table class="table">
                                                              <tr>
                                                                  <th style="text-align: center">No</th>
                                                                  <th style="text-align: center">Product Name</th>
                                                                  <th style="text-align: center">Status</th>
                                                                  <th style="text-align: center">Access</th>
                                                              </tr>
                                                             @forelse($item->products as $pkey => $product)
                                                                 <tr>
                                                                     <td style="text-align: center">{{$pkey+1}}</td>
                                                                     <td style="text-align: center">{{$product->name}}</td>

                                                                     @if($product->users()->first())
                                                                         <td style="text-align: center">Access</td>
                                                                     @else
                                                                         <td style="text-align: center">No Access</td>
                                                                     @endif
                                                                     <td style="text-align: center">
                                                                         @if($product->users()->first())
                                                                         <input type="checkbox" value="{{$product->id}}" class="form-control" name="products[]" checked>
                                                                         @else
                                                                             <input type="checkbox" value="{{$product->id}}" class="form-control" name="products[]">
                                                                         @endif
                                                                     </td>
                                                                 </tr>
                                                              @empty
                                                                 <tr>
                                                                     <td></td>
                                                                     <td style="text-align: center;color: #0a53be">No Product Found Under This Category</td>
                                                                    <td></td>
                                                                 </tr>
                                                              @endforelse
                                                          </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div id="accordion">
                                                @foreach($cService as $key=>$item)
                                                    <div class="card card-primary">
                                                        <div class="card-header" style="background-color: #7c8289">
                                                            <h4 class="card-title w-100">
                                                                <a class="d-block w-100" data-toggle="collapse" href="#collapse{{$key}}">
                                                                    Category : {{$item->name}}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse{{$key}}" class="collapse show" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <table class="table">
                                                                    <tr>
                                                                        <th style="text-align: center">No</th>
                                                                        <th style="text-align: center">Product Name</th>
                                                                        <th style="text-align: center">Status</th>
                                                                        <th style="text-align:center ">Access</th>
                                                                    </tr>
                                                                    @forelse($item->services as $pkey => $service)
                                                                        <tr>
                                                                            <td style="text-align: center">{{$pkey+1}}</td>
                                                                            <td style="text-align: center">{{$service->name}}</td>
                                                                            @if($service->users()->first())
                                                                                <td style="text-align: center">Access</td>
                                                                            @else
                                                                                <td style="text-align: center">No Access</td>
                                                                            @endif
                                                                            <td style="text-align: center">
                                                                                @if($service->users()->first())
                                                                                    <input type="checkbox" class="form-control" value="{{$service->id}}" name="services[]" checked>
                                                                                @else
                                                                                    <input type="checkbox" class="form-control" value="{{$service->id}}" name="services[]">
                                                                                @endif

                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td></td>
                                                                            <td style="text-align: center;color: #0a53be">No Service Found Under This Category</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    @endforelse
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->

                                    </div>
                                    <div style="text-align: center">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>

                                </div>

                                </form>
                            </div>
                            <!-- ./card -->
                        </div>
                        <!-- /.col -->
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
<script src="{{ url('/dashboard_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('/dashboard_assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('/dashboard_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/dashboard_assets/dist/js/adminlte.js') }}"></script>
<script src="{{ url('/dashboard_assets/dist/js/pages/dashboard.js') }}"></script>

</html>
