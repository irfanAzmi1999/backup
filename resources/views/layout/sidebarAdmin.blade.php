
@section('sidebar')
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" >
            <div class="image">
            </div>
            <div class="info" >

                <a href="{{route('user.edit',Auth::user()->id)}}" class="d-block" > {{ Auth::user()->name }} </a>
            </div>
        </div>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        @isRole('admin')
        <li class="nav-header">Admin Section</li>
        <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage User
                </p>
            </a>
        </li>
        @endisRole

        <li class="nav-header">Products/Services Section</li>
        <li class="nav-item">
            <a href="{{route('productCat')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage Products
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('listofService')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage Services
                </p>
            </a>
        </li>

        @isRole('admin')
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
        @endisRole


    </ul>
</nav>
@endsection
