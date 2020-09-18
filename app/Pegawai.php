<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "tb_pegawai";
    protected $guarded = [];

    public function attandances()
    {
        return $this->belongsTo(Absensi::class, 'pegawai_id');
    }

    public function cuti()
    {
        return $this->belongsTo('App\Cuti', 'nip', 'nip');
    }

    public function darurat()
    {
        return $this->belongsTo('App\Darurat', 'nip', 'nip');
    }
}
