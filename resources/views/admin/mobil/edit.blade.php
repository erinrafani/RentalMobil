@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Mobil</h1>
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
                   <form action="{{route('mobil.update',$mobil->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">ID Merek</label>
                            <select name="id_merek" class="form-control @error('id_merek') is-invalid @enderror" >
                                @foreach($merek as $data)
                                    <option value="{{$data->id}}" {{$data->id == $mobil->id_merek ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('id_merek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Mobil</label>
                            <input type="text" name="nama_mobil" value="{{$mobil->nama_mobil}}" class="form-control @error('nama_mobil') is-invalid @enderror">
                             @error('nama_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nomor Polisi</label>
                            <input type="text" name="nomor_polisi" value="{{$mobil->nomor_polisi}}" class="form-control @error('nomor_polisi') is-invalid @enderror">
                             @error('nomor_polisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jumlah Tempat Duduk</label>
                            <input type="number" name="seat" value="{{$mobil->seat}}" class="form-control @error('seat') is-invalid @enderror">
                             @error('seat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Bahan Bakar</label>
                            <input type="text" name="bahan_bakar" value="{{$mobil->bahan_bakar}}" class="form-control @error('bahan_bakar') is-invalid @enderror">
                             @error('bahan_bakar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Status Mobil</label>
                            <input type="text" name="status_mobil" value="{{$mobil->status_mobil}}" class="form-control @error('status_mobil') is-invalid @enderror">
                             @error('status_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tarif Mobil</label>
                            <input type="text" name="tarif_mobil" value="{{$mobil->tarif_mobil}}" class="form-control @error('tarif_mobil') is-invalid @enderror">
                             @error('tarif_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tarif Sopir</label>
                            <input type="text" name="tarif_sopir" value="{{$mobil->tarif_sopir}}" class="form-control @error('tarif_sopir') is-invalid @enderror">
                             @error('tarif_sopir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Gambar Mobil</label>
                            <br>
                            <img src="{{ $mobil->image() }}" height="75" style="padding:10px;" />
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
