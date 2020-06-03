@extends('frontend.layout.checkout')
@section('title','NOMAND - CheckOut')

@section('content')

<header class="header-section">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="index.html">Paket Travel</a> </li>
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
                    <div class="card-body">
                        <h1>Who is Going?</h1>
                        <p>Trip to Ubud, Bali, Indonesia</p>

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
                                    <tr>
                                        <td><img src="{{url('frontend/images/members/Mask Group 7@2x.png')}}" height="60" alt=""></td>
                                        <td class="align-middle">Galih Pratama</td>
                                        <td class="align-middle">SG</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle"><a href="" class="btn btn-sm"> X </a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{url('frontend/images/members/Mask Group 8@2x.png')}}" height="60" alt=""></td>
                                        <td class="align-middle">Angga Risky</td>
                                        <td class="align-middle">CN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle"><a href="" class="btn btn-sm"> X </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-member">
                            <h2>Add Member</h2>
                            <form action="" class="form-inline">
                                <label for="username" class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Username" name="username" id="username">

                                <label for="Visa" class="sr-only">Visa anda</label>
                                <select name="visa" id="Visa" class="custom-select mb-2 mr-sm-2 ">
                                    <option value="visa">Visa</option>
                                    <option value="30day">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>


                                <label for="passport" class="sr-only">DUE Passport</label>
                                <div class="input-goup mb-2 mr-sm-2">
                                    <input type="text" name="date" id="date" class="from-control input" placeholder="DUE Passport">
                                </div>

                                <button class="btn btn-add-now mb-2 px-4" type="submit"> Add Now</button>
                                <!-- <div class="form-group">
                                        <input type="text" placeholder="Username" name="username">
                                        <select name="" id="">
                                            <option value="">VISA</option>
                                            <option value="">visa 1</option>
                                            <option value="">visa 2</option>
                                        </select>
                                        <input type="date" placeholder="DOE Passwport">
                                        <button type="submit" class="btn btn-addnow">Add Now</button>
                                    </div> -->
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
                                    <td>2 person</td>
                                </tr>
                                <tr>
                                    <th>Additional VISA</th>
                                    <td>$ 190,00</td>
                                </tr>
                                <tr>
                                    <th>Trip Price </th>
                                    <td>$80,00/person</td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td>$ 280,00</td>
                                </tr>
                                <tr>
                                    <th>Total (+Unique Code)</th>
                                    <td><b>$279,<span class="unq">33</span></b> </td>
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
                    <div class="card-footer">
                        <button class="btn btn-block btn-join" type="submit">I Have Made Payment</button>
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
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: `<img src="{{url('frontend/images/ic_doe@2x.png')  }}"/>`
            }
        });
    });
</script>
@endpush