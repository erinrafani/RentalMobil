@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Mobil</h1>
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
                    Data Mobil
                    <a href="{{route('mobil.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Mobil</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>ID Merek</th>
                                <th>Nama Mobil</th>
                                <th>Nomor Polisi</th>
                                <th>Jumlah Tempat Duduk</th>
                                <th>Bahan Bakar</th>
                                <th>Status Mobil</th>
                                <th>Tarif Mobil</th>
                                <th>Tarif Sopir</th>
                                <th>Cover Buku</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($mobil as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_merek}}</td>
                                <td>{{$data->nama_mobil}}</td>
                                <td>{{$data->nomor_polisi}}</td>
                                <td>{{$data->seat}}</td>
                                <td>{{$data->bahan_bakar}}</td>
                                <td>{{$data->status_mobil}}</td>
                                <td>{{$data->tarif_mobil}}</td>
                                <td>{{$data->tarif_sopir}}</td>
                                <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Gambar"></td>
                                <td>
                                    <form action="{{route('mobil.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('mobil.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('mobil.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
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
