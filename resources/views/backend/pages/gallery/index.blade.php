@extends('backend.layout.app')

@section('title','Dashboard - Admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
        <a href="{{route('gallery.create')}}" class="btn btn-md btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white  "> Tambah Gallery</i>
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Travel</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->travel_package->title }}</td>
                            <td>
                                <img src="{{Storage::url($data->image)}}" alt="Travel Images" width="150px" class="img-thumbnail">
                            </td>                    
                            <td>
                                <a href="{{route('gallery.edit',$data->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <form action="{{route('gallery.destroy',$data->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection