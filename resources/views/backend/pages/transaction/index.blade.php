@extends('backend.layout.app')

@section('title','Transaction - Admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaction</h1>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Travel</th>
                            <th>User</th>
                            <th>Visa</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->travel_package->title }}</td>
                            <td>{{$data->user->name }}</td>                        
                            <td>{{$data->additional_visa }}</td>
                            <td>{{$data->transaction_total }}</td>
                            <td>{{$data->transaction_status }}</td>
                            <td>
                                <a href="{{route('transaction.show',$data->id)}}" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                                <a href="{{route('transaction.edit',$data->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <form action="{{route('transaction.destroy',$data->id)}}" method="POST" class="d-inline">
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