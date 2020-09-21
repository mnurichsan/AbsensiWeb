<?php

namespace App\Exports;

use App\Pegawai;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PegawaiExport implements FromView
{

    public function view(): View
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
        return view('rekap.rekapexport', [
            'rekaps' => $rekaps
        ]);
    }
}
