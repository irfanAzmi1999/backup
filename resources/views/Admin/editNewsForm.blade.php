<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Job</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/dashboard_assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dashboard_assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../dashboard_assets/plugins/summernote/summernote-bs4.min.css">
    <script src="https://cdn.tiny.cloud/1/a3o1o7g2yyqr4tdaftctpx9mqursxwjhyhcqmx18d8ilkba7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../../images/faazmiar-logo-only.png" alt="AdminLTELogo" height="60" width="60">
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
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>
        @include('../../layout/sidebarAdmin')
        @yield('sidebar')
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update News </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" >Update news</li>
                        </ol>
                    </div><!-- /.col -->
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <form action="{{route('news.update',[$post->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Update news form</h3>
                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Title</label>
                                            <input type="text" class="form-control" name="news_title" placeholder="News Title" value="{{$post->news_title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>News Image</label><br>
                                        <img src="{{asset('storage/images/news/'.$post->id.'/'.$post->image_name)}}" style="height: 250px;border-radius: 10px" alt="" id="imgOutput">
                                        <input type="file" name="news_image" class="form-control" style="margin-top: 20px" onchange="loadFile(event)">
                                        </div>


                                        <div class="form-group">
                                            <label for="">News Sample Editor</label>
                                            <textarea name="textSample" class="sample" id="editorID" cols="30" rows="10">
                                                {!! $post->texteditor !!}
                                            </textarea>
                                        </div>

                                        <textarea name="generatedText" id="hiddenID" cols="30" rows="5" class="form-control" maxlength="4" readonly></textarea>
                                        <input type="button" onclick="generateText()" value="Generate Short Text" style="margin-top: 10px">
{{--                                        <div class="form-group">--}}
{{--                                            <label>Pharagraphs</label>--}}
{{--                                            <a  onclick="add()" style="cursor: pointer;">Add New</a>--}}
{{--                                            <br>--}}
{{--                                            <div id="divElement">--}}
{{--                                                @foreach($post->pharagraphs as $key => $p)--}}
{{--                                                    <textarea id="divElement{{$key+1}}" class="form-control" name="content[]" rows="4" placeholder="Add Responsibility...">{{$p->content}}</textarea><button type="button" style="margin-bottom: 10px" id="divElement{{$key+1}}" onclick="removeExistingElement(this)">Remove</button>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                            <div id="reqs">--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="" style="text-align: center">
                            <input type="submit" value="submit" class="btn btn-primary">
                        </div>


                </form>
            </div>
            <!-- /.container-fluid -->
        </section>

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
<script src="../../dashboard_assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../dashboard_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../dashboard_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../dashboard_assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../dashboard_assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../dashboard_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../dashboard_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../dashboard_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../dashboard_assets/plugins/moment/moment.min.js"></script>
<script src="../../dashboard_assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../dashboard_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../dashboard_assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../dashboard_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dashboard_assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src=../dashboard_assets/"dist/js/demo.js"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dashboard_assets/dist/js/pages/dashboard.js"></script>
</body>



<script>
    var loadFile = function (event)
    {
        var output = document.getElementById("imgOutput");
        output.src =URL.createObjectURL(event.target.files[0]);

    }
</script>

{{--<script>--}}

{{--    function removeElement(e) {--}}
{{--        let button = e.target;--}}
{{--        let field = button.previousSibling;--}}
{{--        let div = button.parentElement;--}}
{{--        let br = button.nextSibling;--}}
{{--        div.removeChild(button);--}}
{{--        div.removeChild(field);--}}
{{--        div.removeChild(br);--}}

{{--        let allElements = document.getElementById("reqs");--}}
{{--        let inputs = allElements.getElementsByTagName("input");--}}
{{--        for(i=0;i<inputs.length;i++){--}}
{{--            inputs[i].setAttribute('id', 'reqs' + (i+1));--}}


{{--        }--}}
{{--    }--}}

{{--    //remove existing field--}}

{{--    function removeExistingElement(e) {--}}
{{--        let button = e;--}}
{{--        let field = button.previousSibling;--}}
{{--        let div = button.parentElement;--}}
{{--        let br = button.nextSibling;--}}




{{--        div.removeChild(button);--}}
{{--        div.removeChild(field);--}}


{{--        let allElements = document.getElementById("divElement");--}}
{{--        let inputs = allElements.getElementsByTagName("input");--}}
{{--        for(i=0;i<inputs.length;i++){--}}
{{--            inputs[i].setAttribute('id', 'divElement' + (i+1));--}}


{{--        }--}}
{{--    }--}}

{{--    function add() {--}}
{{--        let allElements = document.getElementById("reqs");--}}
{{--        let reqs_id = allElements.getElementsByTagName("input").length;--}}

{{--        reqs_id++;--}}

{{--        //create remove button--}}
{{--        let remove = document.createElement('button');--}}
{{--        remove.setAttribute('id', 'reqsr' + reqs_id);--}}
{{--        remove.setAttribute("style","margin-bottom:10px");--}}
{{--        remove.onclick = function(e) {--}}
{{--            removeElement(e);--}}
{{--        };--}}

{{--        remove.innerHTML = "Remove";--}}

{{--        //create textbox--}}
{{--        let input = document.createElement('textarea');--}}
{{--        input.setAttribute("class", "form-control");--}}
{{--        input.setAttribute("placeholder","New Pharagraph");--}}
{{--        input.setAttribute("name","content[]");--}}
{{--        input.setAttribute("rows","4");--}}
{{--        let reqs = document.getElementById("reqs");--}}



{{--        //append elements--}}
{{--        reqs.appendChild(input);--}}
{{--        reqs.appendChild(remove);--}}

{{--        let br = document.createElement("br");--}}
{{--        reqs.appendChild(br);--}}
{{--    }--}}
{{--</script>--}}

<script>
    tinymce.init({
        selector:'textarea.sample',
        height: 500,
        branding: false,
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],

        image_title : true,
        automatic_uploads: true,
        images_upload_url : '{{route('postImageNews')}}',
        file_picker_types: 'image',
        file_picker_callback: function (cv, value, meta){
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function(){
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                render.onload = function(){
                    var id = 'blobid'+(new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), {title:file.name});
                };
            };
            input.click();
        },
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help | codesample',
        menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help'
    });
    // tinymce.activeEditor.execCommand('mceCodeEditor');
</script>

<script >
    //tinymce.get('editorID').getContent({format : 'text'})
    function generateText()
    {
        document.getElementById('hiddenID').value=tinymce.get('editorID').getContent({format : 'text'});
    }
</script>
</html>
