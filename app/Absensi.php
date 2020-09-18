<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = "tb_absensi";
    protected $guarded = [];
    protected $dates = ['tgl_absen'];

    public function pegawai()
    {
        return $this->hasMany('App\Pegawai', 'nip', 'nip');
    }
}
