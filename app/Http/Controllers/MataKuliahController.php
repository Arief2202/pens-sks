<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMataKuliahRequest;
use App\Http\Requests\UpdateMataKuliahRequest;
use App\Models\MataKuliah;
use App\Models\BidangKeahlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MataKuliahController extends Controller
{
    public function read()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        return view('mataKuliah.read', [
            'mataKuliah' => MataKuliah::all(),
        ]);
    }

    public function showCreate()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        return view('mataKuliah.create', [
            'bidangKeahlian' => BidangKeahlian::all(),
        ]);
    }

    public function saveCreate(Request $request)
    { 
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $request->validate([
            'idBidangKeahlian' => ['required', 'string', 'max:255'],
            'namaMataKuliah' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer','gt:0', 'max:11'],
            'jam' => ['required', 'integer','gt:0', 'max:11'],
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
                'jam' => $request->jam,
            ]);
            return redirect("/mataKuliah");
        }
        
    }

    public function showUpdate($id)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $matkul = MataKuliah::findOrFail($id);
        $bidkah = BidangKeahlian::all();
        return view('mataKuliah.update', [
            'bidangKeahlian' => $bidkah,
            'mataKuliah' => $matkul,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $request->validate([
            'idBidangKeahlian' => ['required', 'string', 'max:255'],
            'namaMataKuliah' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer', 'gt:0', 'max:11'],
            'jam' => ['required', 'integer', 'gt:0', 'max:11'],
        ]);
        $queryValid = MataKuliah::where('namaMataKuliah', '=', $request->namaMataKuliah)
                                ->where('id', '!=', $request->idMataKuliah)->first();
        $queryMatkul = MataKuliah::findOrFail($request->idMataKuliah);
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
            $queryMatkul['jam'] = $request->jam;
            $queryMatkul->save();
            return redirect("/mataKuliah");
        }   
    }
    public function delete($id)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $query = MataKuliah::findOrFail($id);
        $query->delete();
        return redirect("/mataKuliah");
    }
}
