<?php

namespace App\Http\Controllers\API;

use App\Absensi;
use App\Http\Controllers\Controller;
use App\Pegawai;
use App\Pulang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AbsensiControllerApi extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nip'     => 'required',
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $absen = Absensi::create([
                'nip'     => $request->nip,
                'tgl_absen'   => now(),
                'status' => $request->status
            ]);

            if ($absen) {
                return response()->json([
                    'success' => true,
                    'message' => ' Berhasil Absen!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => ' Gagal Absen!',
                ], 401);
            }
        }
    }

    public function pulang(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nip'     => 'required'
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $absenPulang = Pulang::create([
                'nip'     => $request->nip,
                'tgl_absen'   => now()
            ]);

            if ($absenPulang) {
                return response()->json([
                    'success' => true,
                    'message' => ' Berhasil Absen Pulang!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => ' Gagal Absen Pulang!',
                ], 401);
            }
        }
    }
}
