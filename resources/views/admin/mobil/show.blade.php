@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Mobil</h1>
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
                <div class="card-header">Data Mobil</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">ID Merek</label>
                        <input type="text" name="" class="form-control" value="{{$mobil->id_merek}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Mobil</label>
                        <input type="text" name="nama_mobil" value="{{$mobil->nama_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Polisi</label>
                        <input type="text" name="nomor_polisi" value="{{$mobil->nomor_polisi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Tempat Duduk</label>
                        <input type="number" name="seat" value="{{$mobil->seat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Bahan Bakar</label>
                        <input type="text" name="bahan_bakar" value="{{$mobil->bahan_bakar}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Status Mobil</label>
                        <input type="text" name="status_mobil" value="{{$mobil->status_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tarif Mobil</label>
                        <input type="text" name="tarif_mobil" value="{{$mobil->tarif_mobil}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tarif Sopir</label>
                        <input type="text" name="tarif_sopir" value="{{$mobil->tarif_sopir}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Mobil</label>
                        <br>
                        <img src="{{ $mobil->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('/mobil')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
