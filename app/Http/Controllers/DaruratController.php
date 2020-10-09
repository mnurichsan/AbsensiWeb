<?php

namespace App\Http\Controllers;

use App\Darurat;
use Illuminate\Http\Request;

class DaruratController extends Controller
{
    public function index()
    {
        $darurats = Darurat::all();

        return view('darurat.index', compact('darurats'));
    }

    public function destroy($id)
    {
        Darurat::findOrFail($id)->delete();
        alert()->success('Sukses', 'Data Berhasil Di Hapus');
        return redirect()->route('darurat.index');
    }

    public function approve($id)
    {
        $approve = [
            'approve' => 'Approve'
        ];
        Darurat::findOrFail($id)->update($approve);
        toast('Approve', 'success');
        return redirect()->route('darurat.index');
    }

    public function belum($id)
    {
        $approve = [
            'approve' => 'Belum'
        ];
        Darurat::findOrFail($id)->update($approve);
        toast('Belum', 'success');
        return redirect()->route('darurat.index');
    }

    public function tolak($id)
    {
        $approve = [
            'approve' => 'Tolak'
        ];
        Darurat::findOrFail($id)->update($approve);
        toast('Tolak', 'success');
        return redirect()->route('darurat.index');
    }
}
