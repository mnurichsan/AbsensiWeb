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
        return $this->absen()
            ->where('status', 'hadir');
    }
}
