@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Booking</h1>
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
                        <form action="{{route('booking.update',$booking->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">ID Mobil</label>
                                <select name="id_mobil" class="form-control @error('id_mobil') is-invalid @enderror" >
                                    @foreach($mobil as $data)
                                        <option value="{{$data->id}}" {{$data->id == $booking->id_mobil ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                    @endforeach
                                </select>
                                @error('id_mobil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">ID Customer</label>
                                <select name="id_customer" class="form-control @error('id_customer') is-invalid @enderror" >
                                    @foreach($customer as $data)
                                        <option value="{{$data->id}}" {{$data->id == $booking->id_customer ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                    @endforeach
                                </select>
                                @error('id_customer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">ID Sopir</label>
                                <select name="id_sopir" class="form-control @error('id_sopir') is-invalid @enderror" >
                                    @foreach($sopir as $data)
                                        <option value="{{$data->id}}" {{$data->id == $booking->id_sopir ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                    @endforeach
                                </select>
                                @error('id_sopir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">ID Admin</label>
                                <select name="id_admin" class="form-control @error('id_admin') is-invalid @enderror" >
                                    @foreach($admin as $data)
                                        <option value="{{$data->id}}" {{$data->id == $booking->id_merek ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                    @endforeach
                                </select>
                                @error('id_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Booking</label>
                                <input type="date" name="tanggal_booking" value="{{$booking->tanggal_booking}}" class="form-control @error('tanggal_booking') is-invalid @enderror">
                                @error('tanggal_booking')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" value="{{$booking->tanggal_mulai}}" class="form-control @error('tanggal_mulai') is-invalid @enderror">
                                @error('tanggal_mulai')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Kembali</label>
                                <input type="date" name="tanggal_kembali" value="{{$booking->tanggal_kembali}}" class="form-control @error('tanggal_kembali') is-invalid @enderror">
                                @error('tanggal_kembali')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Denda</label>
                                <input type="text" name="denda" value="{{$booking->denda}}" class="form-control @error('denda') is-invalid @enderror">
                                @error('denda')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Durasi</label>
                                <input type="text" name="durasi" value="{{$booking->durasi}}" class="form-control @error('durasi') is-invalid @enderror">
                                @error('durasi')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Status</label>
                                <input type="text" name="status" value="{{$booking->status}}" class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Bayar</label>
                                <input type="text" name="jumlah_bayar" value="{{$booking->jumlah_bayar}}" class="form-control @error('jumlah_bayar') is-invalid @enderror">
                                @error('jumlah_bayar')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jumlah DP</label>
                                <input type="text" name="jumlah_dp" value="{{$booking->jumlah_dp}}" class="form-control @error('jumlah_dp') is-invalid @enderror">
                                @error('jumlah_dp')
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
