@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Pembayaran</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pembayaran
                    <a href="{{route('pembayaran.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Pembayaran</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>ID Booking</th>
                                <th>ID Customer</th>
                                <th>DP</th>
                                <th>Kekurangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($pembayaran as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_booking}}</td>
                                <td>{{$data->id_customer}}</td>
                                <td>{{$data->dp}}</td>
                                <td>{{$data->kekurangan}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <form action="{{route('pembayaran.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('pembayaran.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('pembayaran.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
