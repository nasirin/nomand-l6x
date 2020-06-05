@extends('backend.layout.app')

@section('title','Create gallery - Admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah - Gallery</h1>
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
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="travel_packages_id">Paket Travel</label>
                    <select name="travel_packages_id" id="travel_packages_id" class="form-control" required>
                        <option value="">--Pilih Paket Travel--</option>
                        @foreach($travel_packages as $data)
                        <option value="{{$data->id}}">{{$data->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="images">Image</label>
                    <input type="file" id="images" class="form-control" name="image" placeholder="Image">
                </div>
               
                <button class="btn btn-primary btn-block" type="submit"> Simpan</button>
            </form>
        </div>
    </div>

</div>
@endsection