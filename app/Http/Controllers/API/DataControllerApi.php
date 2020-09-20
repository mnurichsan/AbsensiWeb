<?php

namespace App\Http\Controllers\API;

use App\Cuti;
use App\Darurat;
use App\Http\Controllers\Controller;
use App\Pegawai;
use Illuminate\Http\Request;

class DataControllerApi extends Controller
{
    public function dataAccount($nip)
    {
        $rekaps = collect();
        $pegawai = Pegawai::where('nip', $nip)->get();
        foreach ($pegawai as $p) {
            $rekaps->push([
                'nip' => $p->nip,
                'nama'      => $p->nama_lengkap,
                'hadir'   => $p->hadir()->count(),
                'sakit' => $p->sakit()->count(),
                'izin' => $p->izin()->count(),
                'cuti' => $p->cuti()->count()
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Data Account!',
            'data' => $rekaps
        ], 200);
    }

    public function accountCuti($nip)
    {
        $accountCuti = Cuti::select('tgl_pengajuan', 'informasi', 'approve')->where('nip', $nip)->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Cuti!',
            'data' => $accountCuti
        ], 200);
    }

    public function accountDarurat($nip)
    {
        $accountDarurat = Darurat::select('tgl_pengajuan', 'informasi', 'approve')->where('nip', $nip)->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Darurat!',
            'data' => $accountDarurat
        ], 200);
    }
}
