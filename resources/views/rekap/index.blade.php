@extends('layouts.dashboard')
@section('title','Rekap Absensi')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="" class="btn btn-success float-right"><i class="fas fa-file-excel"></i> Export Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Cuti</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Cuti</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($rekaps as $rekap)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$rekap['nip']}}</td>
                                <td>{{$rekap['nama']}}</td>
                                <td>{{$rekap['hadir']}}</td>
                                <td>{{$rekap['sakit']}}</td>
                                <td>{{$rekap['izin']}}</td>
                                <td>{{$rekap['cuti']}}</td>
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