<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Istrahat extends Model
{
    protected $fillable = ['nip', 'tgl_absen'];
    protected $dates = ['tgl_absen'];
}
