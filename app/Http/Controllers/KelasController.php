<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Models\Kelas;
use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function read()
    {
        $viewKelas = Kelas::all();
        return view('kelas.read', [
            'kelas' => $viewKelas
        ]);
    }

    public function showCreate()
    {
        $namaKurikulum = Kurikulum::all();
        return view('kelas.create', [
            'kurikulum' => $namaKurikulum,
        ]);
    }

    public function saveCreate(Request $request)
    {
        $request->validate([
            'namaKelas' => ['required', 'string', 'max:255'],
            'idKurikulum' => ['required', 'int', 'max:20'],
            'tingkat' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'startTahunAjaran' => ['required', 'string', 'max:255'],
        ]);

        $paketKurikulum = Kelas::create([
            'namaKelas' => $request->namaKelas,
            'kurikulum_id' => $request->idKurikulum,
            'tingkat' => $request->tingkat,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'startTahunAjaran' => $request->startTahunAjaran,
        ]);

        return redirect("/kelas");
    }

    public function showUpdate($id, Request $request)
    {
        $kls = Kelas::where('id', $id)->first();
        $kuri = Kurikulum::all();
        return view('kelas.update', [
            'kelas' => $kls,
            'kurikulum' => $kuri,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        $queryKelas = Kelas::where('id', $request->idKelas)->first();
        $request->validate([
            'namaKelas' => ['required', 'string', 'max:255'],
            'idKurikulum' => ['required', 'int', 'max:20'],
            'tingkat' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'startTahunAjaran' => ['required', 'string', 'max:255'],
        ]);
        $queryKelas['namaKelas'] = $request->namaKelas;
        $queryKelas['kurikulum_id'] = $request->idKurikulum;
        $queryKelas['tingkat'] = $request->tingkat;
        $queryKelas['prodi'] = $request->prodi;
        $queryKelas['semester'] = $request->semester;
        $queryKelas['startTahunAjaran'] = $request->startTahunAjaran;
        $queryKelas->save();
        return redirect("/kelas");
    }
}
