<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'tb_cuti';
    protected $guarded = [];
    protected $dates = ['tgl_pengajuan', 'tgl_awal_cuti', 'tgl_akhir_cuti'];

    public function pegawai()
    {
        return $this->hasMany('App\Pegawai', 'nip', 'nip');
    }
}
