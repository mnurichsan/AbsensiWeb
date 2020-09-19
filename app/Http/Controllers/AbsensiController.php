<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Pegawai;
use Illuminate\Http\Request;

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
        $rekap = collect([]);
        $pegawai = Pegawai::all();
        foreach ($pegawai as $p) {
            $rekap->push([
                'nama'      => $p->nama_lengkap,
                'hadir'   => $p->hadir()->count(),
                'sakit' => $p->sakit()->count()
            ]);
        }
        return $rekap;
    }
}
