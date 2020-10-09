<?php

namespace App\Http\Controllers\API;

use App\Absensi;
use App\Http\Controllers\Controller;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiControllerApi extends Controller
{
    public function login(Request $request)
    {
        $logins = Pegawai::where('nip', $request->nip)->where('password', $request->password)->where('imei', $request->imei)->orWhere('imei2', $request->imei2)->get();

        if (count($logins) > 0) {
            foreach ($logins as $logg) {
                //untuk memanggil data sesi Login
                $result["nip"] = $logg->nip;
                $result["password"] = $logg->password;
                $result["lokasi_kerja"] = $logg->lokasi_kerja;
                $result["jenis_kelamin"] = $logg->jenis_kelamin;
            }
            return response()->json($result, 200);
        } else {
            $result["nip"] = "kosong";
            $result["message"] = "error";
            echo json_encode($result);
        }
    }

    public function atasan()
    {
        $pegawai = Pegawai::select('nama_lengkap')->where('type', 'Atasan')->get();
        return response($pegawai, 200);
    }
    public function readKehadiran()
    {
        $data = collect();

        $pegawai = Absensi::take(5)->orderBy('created_at', 'desc')->get();
        foreach ($pegawai as $p) {
            $data->push([
                'nama_lengkap' => $p->pegawai->nama_lengkap,
                'jenis_kelamin' => $p->pegawai->jenis_kelamin,
                'status' => $p->status,
            ]);
        }
        return response()->json($data, 200);
    }
}
