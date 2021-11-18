@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Pembayaran</h1>
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
                <div class="card-header">Data Pembayaran</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">ID Booking</label>
                        <input type="text" name="id_booking" value="{{$pembayaran->id_booking}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Customer</label>
                        <input type="text" name="id_customer" value="{{$pembayaran->id_customer}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">DP</label>
                        <input type="text" name="dp" value="{{$pembayaran->dp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kekurangan</label>
                        <input type="text" name="kekurangan" value="{{$pembayaran->kekurangan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="status" value="{{$pembayaran->status}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/pembayaran')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
