<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaketKurikulumRequest;
use App\Http\Requests\UpdatePaketKurikulumRequest;
use App\Models\PaketKurikulum;
use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Kurikulum;

class PaketKurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $viewPaketKurikulum = PaketKurikulum::all();
        return view('paketKurikulum.read', [
            'paketKurikulum' => $viewPaketKurikulum,
        ]);
    }

    public function showCreate()
    {
        $namaMataKuliah = MataKuliah::all();
        $namaKurikulum = Kurikulum::all();
        return view('paketKurikulum.create', [
            'mataKuliah' => $namaMataKuliah,
            'kurikulum' => $namaKurikulum,
        ]);
    }

    public function saveCreate(Request $request)
    {
        $request->validate([
            'idMataKuliah' => ['required', 'int', 'max:11'],
            'idKurikulum' => ['required', 'int', 'max:11'],
            'tingkat' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'sksMataKuliah' => ['required', 'int', 'max:11'],
        ]);

        $paketKurikulum = PaketKurikulum::create([
            'mataKuliah_id' => $request->idMataKuliah,
            'kurikulum_id' => $request->idKurikulum,
            'tingkat' => $request->tingkat,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'sksMataKuliah' => $request->sksMataKuliah,
        ]);

        return redirect("/paketKurikulum");
    }

    public function showUpdate()
    {
        $namaMataKuliah = MataKuliah::all();
        $namaKurikulum = Kurikulum::all();
        return view('paketKurikulum.create', [
            'mataKuliah' => $namaMataKuliah,
            'kurikulum' => $namaKurikulum,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        $request->validate([
            'idMataKuliah' => ['required', 'int', 'max:11'],
            'idKurikulum' => ['required', 'int', 'max:11'],
            'tingkat' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'sksMataKuliah' => ['required', 'int', 'max:11'],
        ]);

        $paketKurikulum = PaketKurikulum::create([
            'mataKuliah_id' => $request->idMataKuliah,
            'kurikulum_id' => $request->idKurikulum,
            'tingkat' => $request->tingkat,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'sksMataKuliah' => $request->sksMataKuliah,
        ]);

        return redirect("/paketKurikulum");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketKurikulum  $paketKurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(PaketKurikulum $paketKurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketKurikulum  $paketKurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketKurikulum $paketKurikulum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaketKurikulumRequest  $request
     * @param  \App\Models\PaketKurikulum  $paketKurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaketKurikulumRequest $request, PaketKurikulum $paketKurikulum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketKurikulum  $paketKurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketKurikulum $paketKurikulum)
    {
        //
    }
}
