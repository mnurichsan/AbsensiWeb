<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pegawai extends Model
{
    protected $table = "tb_pegawai";
    protected $guarded = [];

    public static $types = [
        'staff'     => 'staff',
        'manager'   => 'manager',
    ];

    public function attandances(): HasMany
    {
        return $this->hasMany(Absensi::class, 'pegawai_id');
    }

    public function cuti()
    {
        return $this->belongsTo('App\Cuti', 'nip', 'nip');
    }

    public function darurat()
    {
        return $this->belongsTo('App\Darurat', 'nip', 'nip');
    }


    public function present()
    {
        return $this->attandances()
            ->where('status', 'present');
    }
    public function abesens()
    {
        return $this->attandances()
            ->where('status', 'absen');
    }
}
