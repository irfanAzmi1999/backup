
@section('header')
<div class="navbar-area">
    <div class="evolta-responsive-nav">
        <div class="container">
            <div class="evolta-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="../images/faazmiar.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="evolta-nav">
        <div class="container">
            <div class="navbar navbar-expand-md navbar-light">
                <a href="/" class="navbar-brand">
                    <img src="{{ url('/images/faazmiar.png') }}" alt="">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/product" class="nav-link active">Products</a></li>
                        <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="{{route('showNews')}}" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="/career" class="nav-link">Career</a></li>
                        <li class="nav-item"><a href="/aboutUs" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/trainingServices" class="nav-link">Training</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
