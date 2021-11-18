@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Pembayaran</h1>
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
                        <form action="{{route('pembayaran.update',$pembayaran->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">ID Booking</label>
                                <select name="id_booking" class="form-control @error('id_booking') is-invalid @enderror" >
                                    @foreach($booking as $data)
                                        <option value="{{$data->id}}" {{$data->id == $pembayaran->id_booking ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                    @endforeach
                                </select>
                                @error('id_booking')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">ID Customer</label>
                                <select name="id_customer" class="form-control @error('id_customer') is-invalid @enderror" >
                                    @foreach($customer as $data)
                                        <option value="{{$data->id}}" {{$data->id == $pembayaran->id_customer ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                    @endforeach
                                </select>
                                @error('id_customer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan DP</label>
                                <input type="text" name="dp" value="{{$pembayaran->dp}}" class="form-control @error('dp') is-invalid @enderror">
                                @error('dp')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Kekurangan</label>
                                <input type="text" name="kekurangan" value="{{$pembayaran->kekurangan}}" class="form-control @error('kekurangan') is-invalid @enderror">
                                @error('kekurangan')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Status</label>
                                <input type="text" name="status" value="{{$pembayaran->status}}" class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-warning">Simpan</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
