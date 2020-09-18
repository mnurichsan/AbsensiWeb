<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pegawai;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'nip'           => rand(200, 300),
        'password'      => Hash::make('password'),
        'nama_lengkap'  => $faker->name,
        'jabatan'       => $faker->text,
        'divisi'        => $faker->text,
        'lokasi_kerja'  => $faker->address,
        'type'          => $faker->randomElements(array_keys(Pegawai::$types)),
        'jenis_kelamin' => 'Jantan'
        
    ];
});
