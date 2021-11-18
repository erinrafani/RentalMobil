@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Admin</h1>
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
                <div class="card-header">Data Admin</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Admin</label>
                        <input type="text" name="name" value="{{$admin->name}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Email Admin</label>
                        <input type="text" name="name" value="{{$admin->email}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Password Admin</label>
                        <input type="password" name="password" value="{{$admin->password}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
