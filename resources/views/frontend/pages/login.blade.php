@extends('frontend.layout.login')

@section('title','Nomand | Login')

@section('content')

<main class="login-container">
    <div class="container">
        <div class="row pages-login d-flex align-items-center">

            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">We explore the new <br>
                    life much better</h1>
                <img src="{{url('frontend/images/login/Group 6.png')}}" alt="Gambar login" class="w-75 d-none d-sm-flex">
            </div>

            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center">
                            <img src="{{url('frontend/images/logo.png')}}" alt="Logo nomand" class="w-50 mb-4">
                        </div>

                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-warning btn-login btn-block" type="submit">Sign In</button>

                            <div class="text-center mt-4 lupa-password ">
                                <a href="">Saya Lupa Password</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@endsection

@push('addon-style')
<link rel="stylesheet" href="{{url('frontend/styles/login.css')}}">
@endpush
