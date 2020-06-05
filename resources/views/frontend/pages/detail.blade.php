@extends('frontend.layout.app')

@section('title','NOMAND - Detail Tour')

@section('content')
<!-- HEADER -->
<header class="header-section">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{url('/')}}">Paket Travel</a> </li>
                <li class="breadcrumb-item active"> Details</li>
            </ol>
        </nav>
    </div>
</header>

<main>
    <!-- CONTENT DETAIL -->
    <section class="container">
        <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card content-detail">
                    <div class="card-body">
                        <h1>{{$item->title}}</h1>
                        <p>{{$item->location}}</p>

                        @if($item->galleries->count())
                        <!-- img -->
                        <div class="galery">
                            <div class="xzoom-container">
                                <!-- original image -->
                                <img src="{{Storage::url($item->galleries->first()->image)}}" alt="Gambar detial" id="xzoom-default" class="xzoom" xoriginal="{{Storage::url($item->galleries->first()->image)}}" height="350" width="660">
                            </div>
                            <div class="xzoom-thumbnails d-flex justify-content-between">
                                @foreach($item->galleries as $data)
                                <!-- thumbnail -->
                                <a href="{{Storage::url($data->image)}}">
                                    <img class="xzoom-gallery" width="120" height="80" src="{{Storage::url($data->image)}}" xpreview="{{Storage::url($data->image)}}">
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- end img -->
                        @endif

                        <h2 class="mt-3">Tentang Wisata</h2>
                        <p>{{$item->about}}</p>
                    </div>

                    <div class="card-footer">
                        <div class="row content-footer">
                            <div class="col-md-4">
                                <img src="{{url('frontend/images/features/ic_event@2x.png')}}" alt="gambar footer" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>{{$item->featured_event}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/features/ic_language@2x.png')}}" alt="gambar footer" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>{{$item->language}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/features/ic_foods@2x.png')}}" alt="gambar footer " class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>{{$item->food}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="content-detail">
                        <div class="card-body">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="{{url('frontend/images/members/Mask Group 3@2x.png')}}" alt="members" class="circle">
                                <img src="{{url('frontend/images/members/Mask Group -3@2x.png')}}" alt="members">
                                <img src="{{url('frontend/images/members/Mask Group -2@2x.png')}}" alt="members">
                                <img src="{{url('frontend/images/members/Mask Group -1@2x.png')}}" alt="members">
                                <img src="{{url('frontend/images/members/Group 6@2x.png')}}" alt="members">
                            </div>
                            <hr>
                            <h2>Trip Informations</h2>
                            <table class="trip-information table table-responsive-sm table-borderless">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">{{\Carbon\Carbon::create($item->departure_date)->format(' n F Y')}}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">{{$item->duration}}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type </th>
                                    <td width="50%" class="text-right">{{$item->type}}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">${{$item->price}}.00/person</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        @auth
                        <form action="" method="post">
                            <button class="btn btn-block btn-join" type="submit">Join Now</button>
                        </form>
                        @endauth
                        @guest
                        <a class="btn btn-block btn-join" href="{{url('login')}}">Login or Register to join</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xZoom/dist/xzoom.css')}}">
<link rel="stylesheet" href="{{url('frontend/styles/details.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xZoom/dist/xzoom.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            xoffset: 50,
            fadeIn: true,
            defaultScale: 0.9
        });
    });
</script>
@endpush