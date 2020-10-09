@extends('layouts.dashboard')
@section('title','Pegawai')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fas fa-redo"></i> Refresh</button>
                <a href="{{route('pegawai.create')}}" class="btn btn-md btn-primary rounded-pill shadow-lg float-right"><i class="fas fa-plus"></i> Tambah Pegawai</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($pegawais as $key => $pegawai)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$pegawai->nip}}</td>
                                <td>{{$pegawai->nama_lengkap}}</td>
                                <td>
                                    <a href="{{route('pegawai.edit',$pegawai->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('pegawai.destroy',$pegawai->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection