<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiControllerApi extends Controller
{
    public function login(Request $request)
    {
        $logins = Pegawai::where('nip', $request->nip)->where('password', $request->password)->get();

        if (count($logins) > 0) {
            foreach ($logins as $logg) {
                //untuk memanggil data sesi Login
                $result["id"] = $logg->id;
                $result["nip"] = $logg->nip;
                $result["nama_lengkap"] = $logg->nama_lengkap;
            }
            return response()->json($result, 200);
        } else {
            $result["success"] = "0";
            $result["message"] = "error";
            echo json_encode($result);
        }
    }

    public function atasan()
    {
        //
        $pegawai = Pegawai::where('type', 'Atasan')->get();

        return response([
            'success' => true,
            'message' => 'List Semua Atasan',
            'data' => $pegawai
        ], 200);
    }
}
