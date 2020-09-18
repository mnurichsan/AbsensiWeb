<?php

namespace App\Http\Controllers;

use App\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function index()
    {
        $cutis = Cuti::all();
        return view('cuti.index', compact('cutis'));
    }

    public function delete($id)
    {
        Cuti::findOrFail($id)->delete();
        alert()->success('Sukses', 'Data Berhasil Di Hapus');
        return redirect()->route('cuti.index');
    }

    public function approve($id)
    {
        $approve = [
            'approve' => 'Approve'
        ];
        Cuti::findOrFail($id)->update($approve);
        toast('Approve', 'success');
        return redirect()->route('cuti.index');
    }

    public function belum($id)
    {
        $approve = [
            'approve' => 'Belum'
        ];
        Cuti::findOrFail($id)->update($approve);
        toast('Belum', 'success');
        return redirect()->route('cuti.index');
    }

    public function tolak($id)
    {
        $approve = [
            'approve' => 'Tolak'
        ];
        Cuti::findOrFail($id)->update($approve);
        toast('Tolak', 'success');
        return redirect()->route('cuti.index');
    }
}
