@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-20">
                <h1 class="m-0">Data Booking</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">
                    Data Booking
                    <a href="{{route('booking.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Booking</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>ID Mobil</th>
                                <th>ID Customer</th>
                                <th>ID Sopir</th>
                                <th>ID Admin</th>
                                <th>Tanggal Booking</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Tanggal Kembali</th>
                                <th>Denda</th>
                                <th>Durasi</th>
                                <th>Status</th>
                                <th>Jumlah Bayar</th>
                                <th>Jumlah DP</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($booking as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_mobil}}</td>
                                <td>{{$data->id_customer}}</td>
                                <td>{{$data->id_sopir}}</td>
                                <td>{{$data->id_admin}}</td>
                                <td>{{$data->tanggal_booking}}</td>
                                <td>{{$data->tanggal_mulai}}</td>
                                <td>{{$data->tanggal_selesai}}</td>
                                <td>{{$data->tanggal_kembali}}</td>
                                <td>{{$data->denda}}</td>
                                <td>{{$data->durasi}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->jumlah_bayar}}</td>
                                <td>{{$data->jumlah_dp}}</td>
                                <td>
                                    <form action="{{route('booking.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('booking.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('booking.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
