@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Customer</h1>
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
                <div class="card-header">
                    Data Customer
                    <a href="{{route('customer.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Customer</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Customer</th>
                                <th>Nomor Telepon Customer</th>
                                <th>Jenis Kelamin Customer</th>
                                <th>Agama Customer</th>
                                <th>Alamat Customer</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($customer as $data)
                             <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$data->name}}</td>
                                 <td>{{$data->nomor_hp}}</td>
                                 <td>{{$data->jenis_kelamin}}</td>
                                 <td>{{$data->agama}}</td>
                                 <td>{{$data->alamat}}</td>
                                 <td>{{$data->email}}</td>
                                 <td>{{$data->password}}</td>
                                 <td>
                                    <form action="{{route('customer.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('customer.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('customer.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapusnya')">Delete</button>
                                    </form>
                                 </td>
                             </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
