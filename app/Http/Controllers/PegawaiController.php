<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required',
            'lokasi_kerja' => 'required',
            'jenis_jabatan' => 'required',
            'type' => 'required',
            'jenis_kelamin' => 'required',
            'imei' => 'required',
            'imei2' => 'required'
        ]);

        $pegawai = [
            'nip' => $request->nip,
            'password' => '123',
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'divisi' => $request->divisi,
            'lokasi_kerja' => $request->lokasi_kerja,
            'jenis_jabatan' => $request->jenis_jabatan,
            'type' => $request->type,
            'jenis_kelamin' => $request->jenis_kelamin,
            'imei' => $request->imei,
            'imei2' => $request->imei2
        ];
        Pegawai::create($pegawai);
        alert()->success('Sukses', 'Data Berhasil Di Simpan');
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required',
            'lokasi_kerja' => 'required',
            'jenis_jabatan' => 'required',
            'type' => 'required',
            'jenis_kelamin' => 'required',
            'imei' => 'required',
            'imei2' => 'required'
        ]);

        $pegawai = [
            'nip' => $request->nip,
            'password' => '123',
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'divisi' => $request->divisi,
            'lokasi_kerja' => $request->lokasi_kerja,
            'jenis_jabatan' => $request->jenis_jabatan,
            'type' => $request->type,
            'jenis_kelamin' => $request->jenis_kelamin,
            'imei' => $request->imei,
            'imei2' => $request->imei2
        ];
        Pegawai::findOrFail($id)->update($pegawai);
        alert()->success('Sukses', 'Data Berhasil Di Update');
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::findOrFail($id)->delete();
        alert()->success('Sukses', 'Data Berhasil Di Hapus');
        return redirect()->route('pegawai.index');
    }
}
