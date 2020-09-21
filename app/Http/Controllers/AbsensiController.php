<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Exports\PegawaiExport;
use App\Pegawai;
use Maatwebsite\Excel\Facades\Excel;

class AbsensiController extends Controller
{
    public function index()
    {
        $absens = Absensi::all();

        return view('absensi.index', compact('absens'));
    }
    public function destroy($id)
    {
        Absensi::findOrFail($id)->delete();
        alert()->success('Sukses', 'Data Berhasil Di Hapus');
        return redirect()->route('absen.index');
    }

    public function rekap()
    {
        $rekaps = collect();
        $pegawai = Pegawai::all();
        foreach ($pegawai as $p) {
            $rekaps->push([
                'nip' => $p->nip,
                'nama'      => $p->nama_lengkap,
                'hadir'   => $p->hadir()->count(),
                'sakit' => $p->sakit()->count(),
                'cuti' => $p->dataCuti($p->nip)->count(),
                'izin' => $p->izin()->count()
            ]);
        }

        return view('rekap.index', compact('rekaps'));
    }

    public function export()
    {
        return Excel::download(new PegawaiExport, 'PegawaiAbsens.xlsx');
    }
}
