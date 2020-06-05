@extends('backend.layout.app')

@section('title','Dashboard - Admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Ubah - Paket Travel</h1>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('travel-package.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" class="form-control" name="title" placeholder="Title" value="{{$item->title}}">
                </div>
                <div class="form-group">
                    <label for="location">location</label>
                    <input type="text" id="location" class="form-control" name="location" placeholder="Location" value="{{$item->location}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control d-block w-100" name="about">{{$item->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" id="featured_event" class="form-control" name="featured_event" placeholder="Featured Event" value="{{$item->featured_event}}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" id="language" class="form-control" name="language" placeholder="Language" value="{{$item->language}}">
                </div>
                <div class="form-group">
                    <label for="food">Foods</label>
                    <input type="text" id="food" class="form-control" name="food" placeholder="Food" value="{{$item->food}}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" id="departure_date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{$item->departure_date}}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" id="duration" class="form-control" name="duration" placeholder="Duration" value="{{$item->duration}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" id="type" class="form-control" name="type" placeholder="Type" value="{{$item->type}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" min="0" id="price" class="form-control" name="price" placeholder="Price" value="{{$item->price}}">
                </div>
                <button class="btn btn-warning btn-block" type="submit"> Ubah</button>
            </form>
        </div>
    </div>

</div>
@endsection