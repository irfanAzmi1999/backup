<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applicant Details</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js" integrity="sha512-MoP2OErV7Mtk4VL893VYBFq8yJHWQtqJxTyIAsCVKzILrvHyKQpAwJf9noILczN6psvXUxTr19T5h+ndywCoVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.js" integrity="sha512-aqpxRD4NwJUXN742KSiIr4zARkh+WTeaWwx0DYuy+9eARX/glcCFtHSeETrIc6V+1BwYfMwvPz5KWlVtRyXikQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            Job Selected : <b>{{$posts->job->jobName}}</b>
                        </h3>
                    </div>
                    <div class="card-body">
                        <h4>Content</h4>
                        <div class="row">
                            <div class="col-5 col-sm-3">
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Profile</a>
                                    <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Resume/CV</a>
{{--                                    <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">CV</a>--}}
                                    <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Supporting Document</a>
                                </div>
                            </div>
                            <div class="col-7 col-sm-9" style="height: 500px">
                                <div class="tab-content" id="vert-tabs-tabContent" >
                                    <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab" >
                                        <div class="form-group" style="text-align: center">
                                            <img class="border" src="{{asset('storage/document/job_application/'.$posts->id.'/image/'.$posts->image)}}" alt="" style="height: 200px">
                                        </div>
                                        <div >
                                            <div class="form-group" style="left: 20px">
                                                <label>Name :</label>
                                                <label style="font-weight: normal">{{$posts->name}}</label>
                                            </div>

                                            <div class="form-group">
                                                <label>Email : </label>
                                                <label style="font-weight: normal"><a href="mailto:{{$posts->email}}">{{$posts->email}}</a></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Phone Number : </label>
                                                <label for="" style="font-weight: normal">{{$posts->phone}}</label>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Address :</label>
                                                <label for="" style="font-weight: normal">{{$posts->address}}</label>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Application Date :</label>
                                                <label for="" style="font-weight: normal">{{$posts->created_at->format('d M Y, h:i A')}}</label>
                                            </div>

                                        </div>






                                    </div>
                                    <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                       <div id="pdf-viewer" style="height: 500px"></div>
                                        <script>
                                            PDFObject.embed("{{asset('storage/document/job_application/'.$posts->id.'/resume/'.$posts->resume)}}","#pdf-viewer");
                                        </script>
                                    </div>
{{--                                    <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">--}}
{{--                                        <div id="pdf-viewercv" style="height: 500px"></div>--}}
{{--                                        <script>--}}
{{--                                            PDFObject.embed("{{asset('storage/document/job_application/'.$posts->id.'/cv/'.$posts->cv)}}","#pdf-viewercv");--}}
{{--                                        </script>--}}
{{--                                    </div>--}}
                                    <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                                        <div id="pdf-viewercert" style="height: 500px"></div>
                                        <script>
                                            PDFObject.embed("{{asset('storage/document/job_application/'.$posts->id.'/suppDoc/'.$posts->cert)}}","#pdf-viewercert");
                                        </script>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card -->
                </div>
            </div><!-- /.container-fluid -->
        </div>

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
@if(Session::has('message'))
    <script>
        alert('{{Session::get('message')}}');
    </script>
@endif
<script>
    function deleteJob(id,jobName)
    {
        var formID = "frmDeleteJob"+id;
        let confirmAction = confirm("Are you sure to delete this job (id :"+id+"="+jobName+")?");
        if (confirmAction) {
            document.getElementById(formID).submit();
        } else {
            alert("Action canceled");
        }
    }

    function updateStatus(jobName,jobStatus,jobID)
    {
        let confirmationWindow = confirm("Current vacancy status for job: "+jobName+" is "+jobStatus+". Would you like to change it?");
        if(confirmationWindow)
        {
            window.location.assign("/Update_Status/"+jobID);
        }
        else{
            alert("Action cancelled");
        }
    }

</script>
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
</html>
