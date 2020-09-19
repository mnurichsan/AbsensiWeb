@extends('layouts.dashboard')
@section('title','Pegawai')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Tanggal Absen</th>
                                <th>Jam Masuk</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Tanggal Absen</th>
                                <th>Jam Absen</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($absens as $key => $absen)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$absen->nip}}</td>
                                <td>{{$absen->pegawai['nama_lengkap']}}</td>
                                <td>{{$absen->pegawai['jabatan']}}</td>
                                <td>{{$absen->tgl_absen->format('d.m.Y')}}</td>
                                <td>{{$absen->tgl_absen->format('H:i:s')}}</td>
                                <td>{{$absen->status}}</td>
                                <td>
                                    <a href="{{route('absen.delete',$absen->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
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