<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMataKuliahRequest;
use App\Http\Requests\UpdateMataKuliahRequest;
use App\Models\MataKuliah;
use App\Models\BidangKeahlian;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
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
        $namaMataKuliah = MataKuliah::all();
        // dd($namaBidangKeahlian);
        return view('mataKuliah.read', [
            'mataKuliah' => $namaMataKuliah,
        ]);
    }

    public function showCreate()
    {
        $namaBidangKeahlian = BidangKeahlian::all();
        // dd($namaBidangKeahlian);
        return view('mataKuliah.create', [
            'bidangKeahlian' => $namaBidangKeahlian,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMataKuliahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function saveCreate(Request $request)
    { 
        $request->validate([
            'idBidangKeahlian' => ['required', 'string', 'max:255'],
            'namaMataKuliah' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer','gt:1', 'max:11'],
        ]);
        $queryValid = MataKuliah::where('namaMataKuliah', '=', $request->namaMataKuliah)->first();
        if($queryValid){
            $namaBidangKeahlian = BidangKeahlian::all();
            return view('mataKuliah.create', [
                'errorMessage' => 'Data sudah ada di database',
                'bidangKeahlian' => $namaBidangKeahlian,
            ]);
        }
        else{
            $mataKuliah = MataKuliah::create([
                'bidangKeahlian_id' => $request->idBidangKeahlian,
                'namaMataKuliah' => $request->namaMataKuliah,
                'sks' => $request->sks,
            ]);
            return redirect("/mataKuliah");
        }
        
    }

    public function showUpdate($id, Request $request)
    {
        $matkul = MataKuliah::where('id', $id)->first();
        $bidkah = BidangKeahlian::all();
        return view('mataKuliah.update', [
            'bidangKeahlian' => $bidkah,
            'mataKuliah' => $matkul,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        $request->validate([
            'idBidangKeahlian' => ['required', 'string', 'max:255'],
            'namaMataKuliah' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer', 'gt:1', 'max:11'],
        ]);
        $queryValid = MataKuliah::where('namaMataKuliah', '=', $request->namaMataKuliah)->first();
        $queryMatkul = MataKuliah::where('id', $request->idMataKuliah)->first();
        if($queryValid){
            $matkul = MataKuliah::where('id', $request->idMataKuliah)->first();
            $bidkah = BidangKeahlian::all();
            return view('mataKuliah.update', [
                'errorMessage' => 'Data sudah ada di database',
                'bidangKeahlian' => $bidkah,
                'mataKuliah' => $matkul,
            ]);
        }
        else{
            $queryMatkul['bidangKeahlian_id'] = $request->idBidangKeahlian;
            $queryMatkul['namaMataKuliah'] = $request->namaMataKuliah;
            $queryMatkul['sks'] = $request->sks;
            $queryMatkul->save();
            return redirect("/mataKuliah");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMataKuliahRequest  $request
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMataKuliahRequest $request, MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliah $mataKuliah)
    {
        //
    }
}
