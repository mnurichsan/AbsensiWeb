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
        $nip = Pegawai::select('nip')->distinct()->get();
        $rekap = Absensi::with('pegawai')->where('status', 'hadir')->get();
        dd($nip);
    }
}
