@extends('backend.layout.app')

@section('title','Dashboard - Admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Ubah - Tansaction</h1>
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
            <form action="{{route('transaction.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="transaction_status">Status Transaksi</label>
                    <select name="transaction_status" id="transaction_status" class="form-control" required>
                        <option value="{{$item->transaction_status}}">Status saat ini ( {{ $item->transaction_status }})</option>
                        <option value="IN_CART">In Cart</option> 
                        <option value="PENDING">Pendding</option>
                        <option value="SUCCESS">Success</option>
                        <option value="FAILED">Failed</option>
                        <option value="CANCEL">Cancel</option>
                    </select>
                </div>
                <button class="btn btn-warning btn-block" type="submit"> Ubah</button>
            </form>
        </div>
    </div>

</div>
@endsection