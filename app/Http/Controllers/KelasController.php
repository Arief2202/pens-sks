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
        return view('kelas.read');
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

        $paketKurikulum = PaketKurikulum::create([
            'namaKelas' => $request->namaKelas,
            'idKurikulum' => $request->idKurikulum,
            'tingkat' => $request->tingkat,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'startTahunAjaran' => $request->startTahunAjaran,
        ]);

        return redirect("/kelas");
    }
}
