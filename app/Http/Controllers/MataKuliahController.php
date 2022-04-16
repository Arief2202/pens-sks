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
        return view('mataKuliah.read');
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
            'namaMataKuliah' => ['required', 'string', 'max:255']
        ]);
        
        $mataKuliah = MataKuliah::create([
            'bidangKeahlian_id' => $request->idBidangKeahlian,
            'namaMataKuliah' => $request->namaMataKuliah
        ]);

        return redirect("/mataKuliah");
    }

    public function showUpdate()
    {
        $namaBidangKeahlian = BidangKeahlian::all();
        return view('mataKuliah.create', [
            'bidangKeahlian' => $namaBidangKeahlian,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        $request->validate([
            'namaMataKuliah' => ['required', 'string', 'max:255'],
            //'namaMataKuliah' => ['required', 'string', 'max:255']
        ]);
        
        $mataKuliah = MataKuliah::create([
            'namaMataKuliah' => $request->namaMataKuliah,
            //'namaMataKuliah' => $request->namaMataKuliah
        ]);

        return redirect("/mataKuliah");
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
