<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absensi extends Model
{
    protected $table = "tb_absensi";
    protected $guarded = [];
    protected $dates = ['tgl_absen'];

    public function pegawai() : BelongsTo
    {
        return $this->belongsTo(Pegawai::class , 'pegawai_id');
    }
}
