<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pulang extends Model
{
    protected $table = 'tb_pulang';
    protected $guarded = [];
    protected $dates = ['tgl_absen'];
}
