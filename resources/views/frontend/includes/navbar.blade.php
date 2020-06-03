<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{url('/')}}" class="navbar-brand">
            <img src="{{url('frontend/images/logo@2x.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2"><a href="index.html" class="nav-link active">Home</a></li>
                <li class="nav-item mx-md-2"><a href="" class="nav-link">Peket Travel</a></li>
                <li class="nav-item mx-md-2 dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Service</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Passport</a>
                        <a href="" class="dropdown-item">Visa</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2"><a href="" class="nav-link">Testimonial</a></li>

                <!-- mobile login -->
                <form action="#" class="form-inline d-sm-block d-md-none" method="GET">
                    <button class="btn btn-login my-2 my-sm-0 px-4">Login</button>
                </form>
                <!-- desktop login -->
                <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">Login</button>
                </form>
            </ul>
        </div>
    </nav>
</div>