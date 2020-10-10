<?php

namespace App\Imports;

use App\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;

class PegawaiImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pegawai([
            'nip' => $row[1],
            'password' => 123,
            'imei' => 0,
            'imei2' => 0,
            'nama_lengkap' => $row[2],
            'jabatan' => $row[3],
            'divisi' => $row[4],
            'lokasi_kerja' => $row[5],
            'jenis_jabatan' => $row[6],
            'type' => $row[7],
            'jenis_kelamin' => $row[8]
        ]);
    }
}
