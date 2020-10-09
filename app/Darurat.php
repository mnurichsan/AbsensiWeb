<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darurat extends Model
{
    protected $table = 'tb_darurat';
    protected $guarded = [];
    protected $dates = ['tgl_pengajuan'];

    public function pegawai()
    {
        return $this->hasMany('App\Pegawai', 'nip', 'nip');
    }

    public function getTgl_PengajuanAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
