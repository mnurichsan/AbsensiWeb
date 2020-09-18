@extends('layouts.dashboard')
@section('title','Menu Cuti')
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
                                <th>Tanggal Pengajuan</th>
                                <th>Nama</th>
                                <th>Nip</th>
                                <th>Jenis Cuti</th>
                                <th>Awal Pengajuan</th>
                                <th>Lama Cuti</th>
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
                                <th>Jenis Cuti</th>
                                <th>Awal Pengajuan</th>
                                <th>Lama Cuti</th>
                                <th>Status</th>
                                <th>Approve</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($cutis as $key => $cuti)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$cuti->tgl_pengajuan->format('d-m-Y')}}</td>
                                <td>{{$cuti->pegawai[0]['nama_lengkap']}}</td>
                                <td>{{$cuti->nip}}</td>
                                <td>{{$cuti->informasi}}</td>
                                <td>{{$cuti->tgl_awal_cuti->format('d-m-Y')}}</td>
                                <td>{{ \Carbon\Carbon::parse( $cuti->tgl_awal_cuti )->diffInDays( $cuti->tgl_akhir_cuti ) }} Hari</td>
                                <td>{{$cuti->approve}}</td>
                                <td>
                                    @if($cuti->approve == 'Belum')
                                    <div class="btn-group">
                                        <a href="{{route('cuti.tolak',$cuti->id)}}" class="btn btn-sm btn-warning mr-2">Tolak</a>
                                        <a href="{{route('cuti.approve',$cuti->id)}}" class="btn btn-sm btn-success">Approve</a>
                                    </div>
                                    @elseif($cuti->approve == 'Tolak')
                                    <div class="btn-group">
                                        <a href="{{route('cuti.belum',$cuti->id)}}" class="btn btn-sm btn-primary mr-2">Belum</a>
                                        <a href="{{route('cuti.approve',$cuti->id)}}" class="btn btn-sm btn-success">Approve</a>
                                    </div>
                                    @elseif($cuti->approve == 'Approve')
                                    <div class="btn-group">
                                        <a href="{{route('cuti.belum',$cuti->id)}}" class="btn btn-sm btn-primary mr-2">Belum</a>
                                        <a href="{{route('cuti.tolak',$cuti->id)}}" class="btn btn-sm btn-warning">Tolak</a>
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