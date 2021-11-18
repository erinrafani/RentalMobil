@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Merek</h1>
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
                    <div class="form-group">
                        <label for="">Nama Merek</label>
                        <input type="text" name="nama_merek" value="{{$merek->nama_merek}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/merek')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
