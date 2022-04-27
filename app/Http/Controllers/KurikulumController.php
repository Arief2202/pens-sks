<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKurikulumRequest;
use App\Http\Requests\UpdateKurikulumRequest;
use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
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
        $viewKurikulum = Kurikulum::all();
        return view('kurikulum.read', [
            'kurikulums' => $viewKurikulum,
        ]);
    }

    public function showCreate()
    {
        return view('kurikulum.create');
    }

    public function saveCreate(Request $request)
    {
        $request->validate([
            'namaKurikulum' => ['required', 'string', 'max:255'],
        ]);
        $queryValid = Kurikulum::where('namaKurikulum', '=', $request->namaKurikulum)->first();
        if($queryValid){
            return view('kurikulum.create', [
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $kurikulum = Kurikulum::create([
                'namaKurikulum' => $request->namaKurikulum,
            ]);

            return redirect("/kurikulum");    
        }
    }

    public function showUpdate($id, Request $request)
    {
        $kuri = Kurikulum::where('id', $id)->first();
        return view('kurikulum.update', [
            'kurikulum' => $kuri,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        $request->validate([
            'namaKurikulum' => ['required', 'string', 'max:255'],
        ]);
        $queryKuri = Kurikulum::where('id', $request->idKurikulum)->first();
        $queryValid = Kurikulum::where('namaKurikulum', '=', $request->namaKurikulum)->first();
        if($queryValid){
            $kuri = Kurikulum::where('id', $request->idKurikulum)->first();
            return view('kurikulum.update', [
                'kurikulum' => $kuri,
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $queryKuri['namaKurikulum'] = $request->namaKurikulum;
            $queryKuri->save();
            return redirect("/kurikulum");
        }
    }

    public function destroy(Kurikulum $kurikulum)
    {
        //
    }
}
