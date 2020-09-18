<?php

namespace App\Http\Controllers\API;

use App\Cuti;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CutiControllerApi extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nip'     => 'required',
                'informasi' => 'required',
                'tgl_awal_cuti' => 'required',
                'tgl_akhir_cuti' => 'required',
                'alasan' => 'required',
                'atasan' => 'required',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $cuti = Cuti::create([
                'tgl_pengajuan' => now(),
                'nip'   => $request->nip,
                'informasi' => $request->informasi,
                'tgl_awal_cuti' => date('Y-m-d', strtotime($request->tgl_awal_cuti)),
                'tgl_akhir_cuti' => date('Y-m-d', strtotime($request->tgl_akhir_cuti)),
                'alasan' => $request->alasan,
                'atasan' => $request->atasan,
                'approve' => 'Belum'
            ]);

            if ($cuti) {
                return response()->json([
                    'success' => true,
                    'message' => ' Berhasil Cuti!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => ' Gagal Cuti!',
                ], 401);
            }
        }
    }
}
