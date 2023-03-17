
@section('sidebar')
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">Admin Section</li>

        <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage Admin
                </p>
            </a>
        </li>

        <li class="nav-header">Jobs Section</li>
        <li class="nav-item">
            <a href="{{route('job.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage Vacancy
                </p>
            </a>
        </li>

        <li class="nav-header">News Section</li>
        <li class="nav-item">
            <a href="{{route('news.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage News
                </p>
            </a>
        </li>



    </ul>
</nav>
@endsection
