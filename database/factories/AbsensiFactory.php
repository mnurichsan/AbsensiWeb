<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Absensi;
use App\Pegawai;
use Faker\Generator as Faker;

$factory->define(Absensi::class, function (Faker $faker) {
    return [
        'pegawai_id' => Pegawai::inRandomOrder()->first()->id,
        'tgl_absen'  => now()->addDay(7),
        'status'     => 'present',
    ];
});
