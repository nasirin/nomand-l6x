@extends('frontend.layout.app')

@section('title','NOMAND - Detail Tour')

@section('content')
<!-- HEADER -->
<header class="header-section">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="index.html">Paket Travel</a> </li>
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
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia Raya</p>

                        <!-- img -->
                        <div class="galery">
                            <div class="xzoom-container">
                                <!-- original image -->
                                <img src="{{url('frontend/images/detail/img1.jpg')}}" alt="Gambar detial" id="xzoom-default" class="xzoom" xoriginal="{{url('frontend/images/detail/img1.jpg')}}" height="350" width="660">
                            </div>
                            <div class="xzoom-thumbnails d-flex justify-content-between">
                                <!-- thumbnail -->
                                <a href="{{url('frontend/images/detail/img1.jpg')}}">
                                    <img class="xzoom-gallery" width="120" height="80" src="{{url('frontend/images/detail/img1.jpg')}}" xpreview="{{url('frontend/images/detail/img1.jpg')}}">
                                </a>
                                <a href="{{url('frontend/images/detail/img2.jpg')}}">
                                    <img class="xzoom-gallery" width="120" height="80" src="{{url('frontend/images/detail/img2.jpg')}}" xpreview="{{url('frontend/images/detail/img2.jpg')}}">
                                </a>
                                <a href="{{url('frontend/images/detail/img3.jpg')}}">
                                    <img class="xzoom-gallery" width="120" height="80" src="{{url('frontend/images/detail/img3.jpg')}}" xpreview="{{url('frontend/images/detail/img3.jpg')}}">
                                </a>
                                <a href="{{url('frontend/images/detail/img4.jpg')}}">
                                    <img class="xzoom-gallery" width="120" height="80" src="{{url('frontend/images/detail/img4.jpg')}}" xpreview="{{url('frontend/images/detail/img4.jpg')}}">
                                </a>
                                <a href="{{url('frontend/images/detail/img5.jpg')}}">
                                    <img class="xzoom-gallery" width="120" height="80" src="{{url('frontend/images/detail/img5.jpg')}}" xpreview="{{url('frontend/images/detail/img5.jpg')}}">
                                </a>
                            </div>
                        </div>
                        <!-- end img -->

                        <h2 class="mt-3">Tentang Wisata</h2>
                        <p>Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung
                            Regency that includes the neighbouring small island of Nusa Lembongan. The Badung
                            Strait separates the island and Bali. The interior of Nusa Penida is hilly with a
                            maximum
                            altitude of 524 metres. It is drier than the nearby island of Bali.</p>
                        <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of
                            Nusa Lembongan. The Badung Strait separates the island and Bali.</p>
                    </div>

                    <div class="card-footer">
                        <div class="row content-footer">
                            <div class="col-md-4">
                                <img src="{{url('frontend/images/features/ic_event@2x.png')}}" alt="gambar footer" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/features/ic_language@2x.png')}}" alt="gambar footer" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/features/ic_foods@2x.png')}}" alt="gambar footer " class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
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
                                    <td width="50%" class="text-right">22 Aug, 2019</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">4D 3N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type </th>
                                    <td width="50%" class="text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">$80.00/person</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-block btn-join" type="submit">Join Now</button>
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