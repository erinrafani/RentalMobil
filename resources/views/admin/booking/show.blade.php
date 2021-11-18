@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Booking</h1>
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
                <div class="card-header">Data Booking</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">ID Mobil </label>
                        <input type="text" name="id_mobil" value="{{$booking->id_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Customer</label>
                        <input type="text" name="id_customer" value="{{$booking->id_customer}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Sopir</label>
                        <input type="text" name="id_sopir" value="{{$booking->id_sopir}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Admin</label>
                        <input type="text" name="id_admin" value="{{$booking->id_admin}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Booking</label>
                        <input type="date" name="tanggal_booking" value="{{$booking->tanggal_booking}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" value="{{$booking->tanggal_mulai}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" value="{{$booking->tanggal_selesai}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" value="{{$booking->tanggal_kembali}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Denda</label>
                        <input type="text" name="denda" value="{{$booking->denda}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Durasi</label>
                        <input type="number" name="durasi" value="{{$booking->durasi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="status" value="{{$booking->status}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar</label>
                        <input type="text" name="jumlah_bayar" value="{{$booking->jumlah_bayar}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah DP</label>
                        <input type="text" name="jumlah_dp" value="{{$booking->jumlah_dp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/booking')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
