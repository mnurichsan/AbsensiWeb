@extends('layouts.dashboard')
@section('title','Tambah Pegawai')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('pegawai.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('pegawai.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control form-control-user rounded-pill @error('nip') is-invalid @enderror" autocomplete="off">
                        @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control form-control-user rounded-pill @error('nama_lengkap') is-invalid @enderror" autocomplete="off">
                        @error('nama_lengkap')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control form-control-user rounded-pill @error('jabatan') is-invalid @enderror" autocomplete="off">
                        @error('jabatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Divisi</label>
                        <input type="text" name="divisi" class="form-control form-control-user rounded-pill @error('divisi') is-invalid @enderror" autocomplete="off">
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
                            <option value="1">Biro Akademik dan Kemahasiswaan</option>
                            <option value="12">Biro Umum dan Keuangan</option>
                            <option value="13">Biro Perencanaan dan kerjasama</option>
                            <option value="14">LPPM</option>
                            <option value="15">LP2MP</option>
                            <option value="16">UPT Perpustakaan</option>
                            <option value="17">UPT Teknologi Informasi dan Komunikasi</option>
                            <option value="2">Fakultas Matematika dan Ilmu pengetahuan Alam</option>
                            </option>
                            <option value="3">Fakultas Teknik</option>
                            <option value="4">Fakultas Ilmu Keolahragaan</option>
                            <option value="5">Fakultas Ilmu Pendidikan</option>
                            <option value="6">Fakultas Bahasa dan Sastra</option>
                            <option value="7">Fakultas Ilmu Sosial</option>
                            <option value="8">Fakultas Ekonomi</option>
                            <option value="9">Fakultas Seni dan Desain</option>
                            <option value="10">Fakultas Psikologi</option>
                            <option value="11">Program Pasca Sarjana</option>
                        </select>
                        @error('lokasi_kerja')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Jabatan</label>
                        <input type="text" name="jenis_jabatan" class="form-control form-control-user rounded-pill @error('jenis_jabatan') is-invalid @enderror" autocomplete="off">
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
                            <option value="Atasan">Atasan</option>
                            <option value="Pegawai">Pegawai</option>
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
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Imei Handphone</label>
                        <input type="text" name="imei" class="form-control form-control-user rounded-pill @error('imei') is-invalid @enderror" autocomplete="off">
                        @error('imei')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Imei Handphone 2</label>
                        <input type="text" name="imei2" class="form-control form-control-user rounded-pill @error('imei2') is-invalid @enderror" autocomplete="off">
                        @error('imei2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection