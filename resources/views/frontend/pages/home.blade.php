@extends('frontend.layout.app')

@section('title','Wellcome to Nomand')

@section('content')
<!-- BANNER -->
<header class="text-center">
    <h1>Explore The Beautiful World <br>
        As Easy One Click</h1>
    <p class="mt-3">You will see beautiful <br>
        moment you never see before</p>
    <a href="#populer" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>
<main>
    <!-- STATISTIC -->
    <div class="container">
        <section class="section-start row justify-content-center" id="statistic">
            <div class="col-3 col-md-2 statis-detail">
                <h2>20K</h2>
                <p>Member</p>
            </div>
            <div class="col-3 col-md-2 statis-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 statis-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 statis-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <!-- WISATA POPULER -->
    <section class="section-populer" id="populer">
        <div class="container">
            <div class="row">
                <div class="col text-center section-pupuler-heading">
                    <h2>Wisata Populer</h2>
                    <p>Something that you never try <br>
                        before in this world</p>
                </div>
            </div>
        </div>
    </section>

    <!-- img -->
    <section class="populer-content container" id="popular-content">
        <div class="popular-travel row justify-content-center">

            @foreach($item as $data)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{$data->galleries->count()?Storage::url($data->galleries->first()->image) : ''}}');">
                    <div class="travel-country">{{$data->location}}</div>
                    <div class="travel-location">{{$data->title}}</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ url('detail',$data->slug) }}" class="btn btn-travel-detail px-4">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    <!-- OUR NETWORK -->
    <section class="section-network" id="network">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Network</h2>
                    <p>Companies are trusted us <br>
                        more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('frontend/images/partner/logo_partner@2x.png')}}" alt="Ana partner" class="img-partner">
                    <img src="{{url('frontend/images/partner/logo_partner-2@2x.png')}}" alt="Ana partner" class="img-partner">
                    <img src="{{url('frontend/images/partner/logo_partner-3@2x.png')}}" alt="Ana partner" class="img-partner">
                    <img src="{{url('frontend/images/partner/logo_partner-1@2x.png')}}" alt="Ana partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="section-testimonial-heading" id=tertomonialheading>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them <br>
                        the best experience</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-testimonial-content" id="testimonialcontent">
        <div class="container">
            <div class="section-populer-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testimonial/anggaphoto@2x.png')}}" alt="Testimonial user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonial">“ It was glorious and I could
                                not stop to say wohooo for
                                every single moment
                                Dankeeeeee “</p>
                        </div>
                        <div class="card-footer">
                            <p class="trip-to mt-2">
                                Trip to ubud
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testimonial/Image 6@2x.png')}}" alt="Testimonial user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Shayna</h3>
                            <p class="testimonial">“ The trip was amazing and
                                I saw something beautiful in
                                that Island that makes me
                                want to learn more “</p>
                        </div>
                        <div class="card-footer">
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testimonial/Image 7@2x.png')}}" alt="Testimonial user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Shabrina</h3>
                            <p class="testimonial">“ I loved it when the waves
                                was shaking harder — I was
                                scared too “</p>
                        </div>
                        <div class="card-footer">
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="btn btn-need-help px-4 mx-1">
                        I Need Help
                    </a>
                    <a href="{{route('register')}}" class="btn btn-get-sarted px-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
@endpush