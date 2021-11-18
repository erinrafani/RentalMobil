@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Merek</h1>
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
                <div class="card-header">Data Merek</div>
                <div class="card-body">
                    <form action="{{route('sopir.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nama Merek</label>
                            <input type="text" name="nama_merek" class="form-control @error('name') is-invalid @enderror">
                            @error('nama_merek')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{message}}</strong>
                            </span>
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
