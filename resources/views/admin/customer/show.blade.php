@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Customer</h1>
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
                <div class="card-header">Data Customer</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Customer</label>
                        <input type="text" name="name" value="{{$customer->name}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon Customer</label>
                        <input type="varchar" name="nomor_hp" value="{{$customer->nomor_hp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin Customer</label>
                        <input type="text" name="jenis_kelamin" value="{{$customer->jenis_kelamin}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Agama Customer</label>
                        <input type="text" name="agama" value="{{$customer->agama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Customer</label>
                        <input type="text" name="alamat" value="{{$customer->alamat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Email Customer</label>
                        <input type="text" name="name" value="{{$customer->email}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Password Customer</label>
                        <input type="password" name="password" value="{{$customer->password}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/customer')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
