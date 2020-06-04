@extends('backend.layout.app')

@section('title','Dashboard - Admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{route('travel-package.create')}}" class="btn btn-md btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white  "> Tambah Paket Travel</i>
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Departure Date</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->title }}</td>
                            <td>{{$data->location }}</td>
                            <td>{{$data->type }}</td>
                            <td>{{$data->departure_date }}</td>
                            <td>{{$data->price }}</td>
                            <td>
                                <a href="{{route('travel-package.edit',$data->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <form action="{{route('travel-package.destroy',$data->id)}}" method="POST" class="d-inline">
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