@extends('layouts.dashboard')
@section('title','Menu Darurat')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fas fa-redo"></i> Refresh</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Nama</th>
                                <th>Nip</th>
                                <th>Perihal Darurat</th>
                                <th>Alasan</th>
                                <th>Dokumentasi</th>
                                <th>Status</th>
                                <th>Approve</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Nama</th>
                                <th>Nip</th>
                                <th>Perihal Darurat</th>
                                <th>Alasan</th>
                                <th>Dokumentasi</th>
                                <th>Status</th>
                                <th>Approve</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($darurats as $key => $darurat)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$darurat->tgl_pengajuan->format('d-m-Y')}}</td>
                                <td>{{$darurat->pegawai[0]['nama_lengkap']}}</td>
                                <td>{{$darurat->nip}}</td>
                                <td>{{$darurat->informasi}}</td>
                                <td>{{$darurat->alasan}}</td>
                                <td><img src="{{$darurat->dokumentasi}}" class="img-fluid" /></td>
                                <td>{{$darurat->approve}}</td>
                                <td>
                                    @if($darurat->approve == 'Belum')
                                    <div class="btn-group">
                                        <a href="{{route('darurat.tolak',$darurat->id)}}" class="btn btn-sm btn-warning mr-2">Tolak</a>
                                        <a href="{{route('darurat.approve',$darurat->id)}}" class="btn btn-sm btn-success mr-2">Approve</a>
                                        <a href="{{route('darurat.delete',$darurat->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                    </div>
                                    @elseif($darurat->approve == 'Tolak')
                                    <div class="btn-group">
                                        <a href="{{route('darurat.belum',$darurat->id)}}" class="btn btn-sm btn-primary mr-2">Belum</a>
                                        <a href="{{route('darurat.approve',$darurat->id)}}" class="btn btn-sm btn-success mr-2">Approve</a>
                                        <a href="{{route('darurat.delete',$darurat->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                    </div>
                                    @elseif($darurat->approve == 'Approve')
                                    <div class="btn-group">
                                        <a href="{{route('darurat.belum',$darurat->id)}}" class="btn btn-sm btn-primary mr-2">Belum</a>
                                        <a href="{{route('darurat.tolak',$darurat->id)}}" class="btn btn-sm btn-warning mr-2">Tolak</a>
                                        <a href="{{route('darurat.delete',$darurat->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                    </div>
                                    @endif
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