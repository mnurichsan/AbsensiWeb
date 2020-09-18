<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pegawai;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'nip'           => rand(1 , 100),
        'password'      => bcrypt('password'),
        'nama_lengkap'  => $faker->name,
        'jabatan'       => 'manager',
        'divisi'        => $faker->title,
        'type'          => 'staff',
        'jenis_kelamin' => 'Jantan'
    ];
});
