@extends('frontend.layout.checkout')
@section('title','NOMAND - CheckOut')

@section('content')

<header class="header-section">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{url('/')}}">Paket Travel</a> </li>
                <li class="breadcrumb-item"> Details</li>
                <li class="breadcrumb-item active"> Checkout</li>
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
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        <h1>Who is Going?</h1>
                        <p>Trip to {{$item->travel_package->title }}, {{$item->travel_package->location }}</p>

                        <div class="attendee">
                            <table class="table table-responsive-sm text-center table-borderless">
                                <thead>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Nationality</th>
                                    <th>VISA</th>
                                    <th>Passport</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @forelse($item->details as $detail)
                                    <tr>
                                        <td><img src="https://ui-avatars.com/api/?name={{$detail->username}}" height="60" alt="Avatar" class="rounded-circle"></td>
                                        <td class="align-middle">{{$detail->username}}</td>
                                        <td class="align-middle">{{$detail->nationality}}</td>
                                        <td class="align-middle">{{$detail->is_visa ? '30 Days' : 'N/A'}}</td>
                                        <td class="align-middle">{{\Carbon\Carbon::createFromDate($detail->due_passport) > \Carbon\Carbon::now() ? 'Active' : 'In Active'}}</td>
                                        <td class="align-middle">
                                            <a href="{{route('checkout_remove',$detail->id)}}" class="btn btn-sm"> X </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center"> No Visitor</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="form-member">
                            <h2>Add Member</h2>
                            <form action="{{route('checkout_create',$item->id)}}" class="form-inline" method="POST">
                                @csrf
                                <!-- username -->
                                <label for="username" class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Username" name="username" id="username" required>

                                <!-- nationality -->
                                <label for="nationality" class="sr-only">Nationality</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nationality" style="width:50px" name="nationality" id="nationality" required>

                                <!-- visa -->
                                <label for="Visa" class="sr-only">Visa</label>
                                <select name="is_visa" id="Visa" class="custom-select mb-2 mr-sm-2 " required>
                                    <option value="">--Visa--</option>
                                    <option value="1">30 Days</option>
                                    <option value="0">N/A</option>
                                </select>

                                <!-- passport -->
                                <label for="passport" class="sr-only">DUE Passport</label>
                                <div class="input-goup mb-2 mr-sm-2">
                                    <input type="text" name="due_passport" id="passport" class="from-control input" placeholder="DUE Passport" style="width: 110px;" required>
                                </div>

                                <button class="btn btn-add-now mb-2 px-4" type="submit"> Add Now</button>
                            </form>

                        </div>

                        <h3 class="mt-2">Note</h3>
                        <p class="note">You are only able to invite member that has registered in Nomads.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="content-detail">
                        <div class="card-body">
                            <h2>Checkout Informations</h2>

                            <table class="trip-information table table-responsive-sm table-borderless">
                                <tr>
                                    <th>Members</th>
                                    <td>{{$item->details->count()}} person</td>
                                </tr>
                                <tr>
                                    <th>Additional VISA</th>
                                    <td>$ {{$item->additional_visa}},00</td>
                                </tr>
                                <tr>
                                    <th>Trip Price </th>
                                    <td>${{$item->travel_package->price}},00/person</td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td>$ {{$item->transaction_total}},00</td>
                                </tr>
                                <tr>
                                    <th>Total (+Unique Code)</th>
                                    <td><b>${{$item->transaction_total}},<span class="unq">{{mt_rand(0,99)}}</span></b> </td>
                                    <!-- mt_rand() berfungsi untuk merandom string -->
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instructions</h2>
                            <p class="pay-instruction">Please complete your payment before to continue the wonderful trip</p>
                            <div class="account">
                                <img src="{{url('frontend/images/ic_bank@2x.png')}}" alt="" class="account-img">
                                <div class="desc">
                                    <p>PT Nomads ID</p>
                                    <p>0881 8829 8800</p>
                                    <p>Bank Central Asia</p>
                                </div>

                                <div class="clearfix"></div>

                                <img src="{{url('frontend/images/ic_bank@2x.png')}}" alt="" class="account-img">
                                <div class="desc mt-2">
                                    <p>PT Nomads ID</p>
                                    <p>0881 8829 8800</p>
                                    <p>Bank Central Asia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info mb-0 pb-0">
                        <a class="btn btn-block btn-join" href="{{route('checkout_success',$item->id)}}">I Have Made Payment</a>
                        <!-- <a class="btn btn-block btn-join" href="{{route('checkout_remove',$item->travel_package->slug)}}">Cancel Booking</a> -->
                    </div>
                    <div class="card-footer bg-danger mt-0 pt-0">
                        <!-- <a class="btn btn-block btn-join" href="{{route('checkout_success',$item->id)}}">I Have Made Payment</a> -->
                        <a class="btn btn-block btn-join" href="{{route('checkout_remove',$item->travel_package->slug)}}">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@push('addon-style')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{url('frontend/styles/checkout.css')}}">
@endpush

@push('addon-script')
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.input').datepicker({
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: `<img src="{{url('frontend/images/ic_doe@2x.png')  }}"/>`
            }
        });
    });
</script>
@endpush
