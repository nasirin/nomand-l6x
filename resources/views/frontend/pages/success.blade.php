@extends('frontend.layout.success')
@section('title','NOMAND - Success Checkout')

@section('content')
<main>
    <section class="container">
        <div class="card border-none">
            <img src="{{url('frontend/images/ic_mail@2x.png')}}" alt="" width="266" height="266" class="m-auto">
            <h2>Yay! Success</h2>
            <p>We’ve sent you email for trip instruction <br> please read it as well</p>
            <a href="{{url('/')}}" class="btn btn-home m-auto">Home page</a>
        </div>
    </section>
</main>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{url('frontend/styles/checkoutSuccess.css')}}">
@endpush