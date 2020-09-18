@extends('layouts.dashboard')
@section('title','Edit Pegawai')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('pegawai.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('pegawai.update',$pegawai->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" value="{{$pegawai->nip}}" name="nip" class="form-control form-control-user rounded-pill @error('nip') is-invalid @enderror" autocomplete="off">
                        @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="{{$pegawai->nama_lengkap}}" class="form-control form-control-user rounded-pill @error('nama_lengkap') is-invalid @enderror" autocomplete="off">
                        @error('nama_lengkap')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" value="{{$pegawai->jabatan}}" name="jabatan" class="form-control form-control-user rounded-pill @error('jabatan') is-invalid @enderror" autocomplete="off">
                        @error('jabatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Divisi</label>
                        <input type="text" value="{{$pegawai->divisi}}" name="divisi" class="form-control form-control-user rounded-pill @error('divisi') is-invalid @enderror" autocomplete="off">
                        @error('divisi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Lokasi kerja</label>
                        <select class="custom-select custom-select-md" name="lokasi_kerja">
                            <option selected>-- Pilih Lokasi Kerja -- </option>
                            <option value="1" @if($pegawai->lokasi_kerja == 1) selected @endif>UNM Pettarani</option>
                            <option value="2" @if($pegawai->lokasi_kerja == 2) selected @endif>UNM Bantabantaeng</option>
                            <option value="3" @if($pegawai->lokasi_kerja == 3) selected @endif>UNM Tidung</option>
                            <option value="4" @if($pegawai->lokasi_kerja == 4) selected @endif>UNM Parangtambung</option>
                            <option value="5" @if($pegawai->lokasi_kerja == 5) selected @endif>UNM Pascasarjana</option>
                            <option value="6" @if($pegawai->lokasi_kerja == 6) selected @endif>UNM Pare-pare</option>
                            <option value="7" @if($pegawai->lokasi_kerja == 7) selected @endif>UNM Bone</option>
                        </select>
                        @error('lokasi_kerja')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Jabatan</label>
                        <input type="text" value="{{$pegawai->jenis_jabatan}}" name="jenis_jabatan" class="form-control form-control-user rounded-pill @error('jenis_jabatan') is-invalid @enderror" autocomplete="off">
                        @error('jenis_jabatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Status Jabatan</label>
                        <select class="custom-select custom-select-md" name="type">
                            <option selected>-- Pilih Status Jabatan -- </option>
                            <option value="Atasan" @if($pegawai->type == "Atasan") selected @endif>Atasan</option>
                            <option value="Pegawai" @if($pegawai->type == "Pegawai") selected @endif>Pegawai</option>
                        </select>
                        @error('status_jabatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="custom-select custom-select-md" name="jenis_kelamin">
                            <option selected>-- Pilih Status Jabatan -- </option>
                            <option value="L" @if($pegawai->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                            <option value="P" @if($pegawai->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection