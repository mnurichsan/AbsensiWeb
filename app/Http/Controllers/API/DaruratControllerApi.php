<?php

namespace App\Http\Controllers\API;

use App\Darurat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DaruratControllerApi extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nip'     => 'required',
                'informasi' => 'required',
                'alasan' => 'required',
                'dokumentasi' => 'required',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $darurat = Darurat::create([
                'nip'   => $request->nip,
                'tgl_pengajuan' => now(),
                'informasi' => $request->informasi,
                'alasan' => $request->alasan,
                'dokumentasi' => $request->dokumentasi,
                'approve' => 'Belum'
            ]);

            if ($darurat) {
                return response()->json([
                    'success' => true,
                    'message' => ' Berhasil Darurat!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => ' Gagal Darurat!',
                ], 401);
            }
        }
    }
}
