<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "tb_pegawai";
    protected $guarded = [];

    public function absen()
    {
        return $this->hasMany('App\Absensi', 'nip', 'nip');
    }

    public function cuti()
    {
        return $this->belongsTo('App\Cuti', 'nip', 'nip');
    }

    public function darurat()
    {
        return $this->belongsTo('App\Darurat', 'nip', 'nip');
    }

    public function hadir()
    {
        return $this->absen()
            ->where('status', 'hadir');
    }

    public function sakit()
    {
        return $this->darurat()
            ->where('informasi', 'Sakit');
    }

    public function dataCuti($nip)
    {
        return $this->cuti()
            ->where('nip', $nip);
    }

    public function izin()
    {
        return $this->darurat()->where('informasi', 'Izin');
    }

    public function reportHadir($bulan)
    {
        return $this->hadir()->whereMonth('tgl_absen', '=', $bulan)->get();
    }
    public function reportIzin($bulan)
    {
        return $this->izin()->whereMonth('tgl_pengajuan', '=', $bulan)->get();
    }

    public function reportSakit($bulan)
    {
        return $this->sakit()->whereMonth('tgl_pengajuan', '=', $bulan)->get();
    }

    public function reportCuti($nip, $bulan)
    {
        return $this->dataCuti($nip)->whereMonth('tgl_pengajuan', '=', $bulan)->get();
    }
}
