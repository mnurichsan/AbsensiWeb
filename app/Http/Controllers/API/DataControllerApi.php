<?php

namespace App\Http\Controllers\API;

use App\Absensi;
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
                'nama'   => $p->nama_lengkap,
                'divisi' => $p->divisi,
                'hadir'   => $p->hadir()->count(),
                'sakit' => $p->sakit()->count(),
                'izin' => $p->izin()->count(),
                'cuti' => $p->cuti()->count()
            ]);
        }
        return response()->json($rekaps, 200);
    }

    public function accountCuti($nip)
    {
        $accountCuti = Cuti::where('nip', $nip)->get();
        $data = collect();
        foreach ($accountCuti as $p) {
            $data->push([
                'tgl_pengajuan'   => $p->tgl_pengajuan->format('d-m-Y'),
                'informasi' => $p->informasi,
                'approve' => $p->approve
            ]);
        }
        return response()->json($data, 200);
    }

    public function accountDarurat($nip)
    {
        $accountDarurat = Darurat::where('nip', $nip)->get();
        $data = collect();
        foreach ($accountDarurat as $p) {
            $data->push([
                'tgl_pengajuan'   => $p->tgl_pengajuan->format('d-m-Y'),
                'informasi' => $p->informasi,
                'approve' => $p->approve
            ]);
        }
        return response()->json($data, 200);
    }

    public function dataReport($nip, $bulan)
    {
        $pegawai = Pegawai::where('nip', $nip)->get();
        $data = collect();
        foreach ($pegawai as $p) {
            $data->push([
                'hadir'   => $p->reportHadir($bulan)->count(),
                'izin' => $p->reportIzin($bulan)->count(),
                'sakit' => $p->reportSakit($bulan)->count(),
                'cuti' => $p->reportCuti($nip, $bulan)->count()
            ]);
        }
        return response()->json($data, 200);
    }
}
